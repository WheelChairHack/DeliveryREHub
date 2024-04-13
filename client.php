
<!DOCTYPE html>
<html>
<head>
    <title>Delivery ReHub - Таблицы</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
        <h1 class="mt-5 mb-4">Delivery RE:Hub</h1>

        <!-- Sidebar -->
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-cotaloge-tab" data-toggle="pill" href="#v-pills-cotaloge" role="tab" aria-controls="v-pills-cotaloge" aria-selected="true">Каталог</a>
                    <a class="nav-link" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false">Заказы</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-cotaloge" role="tabpanel" aria-labelledby="v-pills-cotaloge-tab">

                        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="orderModalLabel">Заказать изделие</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="PickupPointID">Выберите пункт выдачи:</label>
                                                <select class="form-control" id="PickupPointID" name="PickupPointID" required>
                                                    <?php
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    $sql = "SELECT PickupPoints.PickupPointID, Locations.LocationName FROM PickupPoints JOIN Locations ON PickupPoints.LocationID = Locations.LocationID JOIN ProductionItems ON PickupPoints.CompanyID = ProductionItems.CompanyID";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row["PickupPointID"] . "'>" . $row["LocationName"] . "</option>";
                                                        }
                                                    }

                                                    $conn->close();

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Выберите способ доставки:</label>
                                                <select class="form-control" required>
                                                    <option value="Самый дешёвый">Самый дешёвый</option>
                                                    <option value="Самый быстрый">Самый быстрый</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="addOrder">Заказать</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php echo getProductionItem(); ?>

                    </div>
                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <?php echo getOrder(); ?>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DeliveryReHubBD";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

class Dijkstra
{
    protected $graph;

    public function __construct($graph)
    {
        $this->graph = $graph;
    }

    public function shortestPath($sourceLocation, $targetWarehouse)
    {
        $d = array();
        $pi = array();
        $Q = new SplPriorityQueue();

        foreach ($this->graph as $v => $adj) {
            $d[$v] = INF;
            $pi[$v] = null;
            foreach ($adj as $w => $route) {
                $Q->insert($w, $route['distance']);
            }
        }

        $d[$sourceLocation] = 0;

        while (!$Q->isEmpty()) {
            $u = $Q->extract();
            if (!empty($this->graph[$u])) {
                foreach ($this->graph[$u] as $v => $route) {
                    $alt = $d[$u] + $route['distance'];
                    if ($alt < $d[$v]) {
                        $d[$v] = $alt;
                        $pi[$v] = $u;
                    }
                }
            }
        }

        $shortestPath = [];
        $u = $targetWarehouse;
        $dist = 0;
        while (isset($pi[$u]) && $pi[$u]) {
            array_unshift($shortestPath, $u);
            $dist += $this->graph[$u][$pi[$u]]['distance'];
            $u = $pi[$u];
        }

        array_unshift($shortestPath, $sourceLocation);

        return ['distance' => $dist, 'path' => $shortestPath];
    }
}

function getRoutesFromDatabase($conn)
{
    $graph = [];

    $sql = "SELECT StartLocationID, EndLocationID, Distance FROM Routes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $startLocation = "Location" . $row["StartLocationID"];
            $endLocation = "Location" . $row["EndLocationID"];
            $distance = $row["Distance"];

            $graph[$startLocation][$endLocation] = ['distance' => $distance];
        }
    }

    return $graph;
}

function addOrder($conn, $FullRoute, $TotalCost, $CustomerID)
{
    $sql = "INSERT INTO Orders (FullRoute, TotalCost, CustomerID) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $FullRoute, $TotalCost, $CustomerID);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}

$graph = getRoutesFromDatabase($conn);

$dijkstra = new Dijkstra($graph);

if (isset($_POST['addOrder'])) {
    $user_id = $_COOKIE['user_id'];
    $startLocation = $_POST['PickupPointID'];
    $targetWarehouse = "";

    $result = $dijkstra->shortestPath($startLocation, $targetWarehouse);

    $FullRoute = implode("->", $result['path']);
    $TotalCost = $result['distance'];

    $result = addOrder($conn, $FullRoute, $TotalCost, $user_id);
    if ($result) {
        echo "Заказ успешно добавлен.";
    } else {
        echo "Ошибка при добавлении заказа.";
    }
}

$conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DeliveryReHubBD";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

function getOrder() {

    $user_id = $_COOKIE['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT PI.OrderID AS ID_Заказа, PI.FullRoute AS Путь, PI.TotalCost AS Цена FROM Orders PI WHERE EXISTS (SELECT 1 FROM Users U WHERE U.UserID = '$user_id' AND U.UserID = PI.CustomerID)";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark'><tr><th>№ Заказа</th><th>Путь</th><th>Цена</th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["ID_Заказа"] . "</td>";
            $html .= "<td>" . $row["Путь"] . "</td>";
            $html .= "<td>" . $row["Цена"] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    $conn->close();

    return $html;
}

function getProductionItem() {

    $user_id = $_COOKIE['user_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT PI.ItemID AS ID_Изделия, PI.ItemName AS Название, PI.Photo AS Изображение, PI.Dimensions AS Размеры, PI.Weight AS Вес, PI.Price AS Цена, PI.Description AS Описание, Companies.CompanyName AS Компания FROM ProductionItems PI INNER JOIN Companies ON PI.CompanyID = Companies.CompanyID ";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark'><tr><th>Название</th><th>Компания</th><th>Изображение</th><th>Размеры</th><th>Вес</th><th>Цена</th><th>Описание</th><th></th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr data-toggle='modal' data-target='#myModal'>";
            $html .= "<td>" . $row["Название"] . "</td>";
            $html .= "<td>" . $row["Компания"] . "</td>";
            $html .= "<td><img src='data:image/jpeg;base64," . base64_encode($row['Изображение']) . "' alt='item photo' style='max-width:100px'></td>";
            $html .= "<td>" . $row["Размеры"] . "</td>";
            $html .= "<td>" . $row["Вес"] . "</td>";
            $html .= "<td>" . $row["Цена"] . "</td>";
            $html .= "<td>" . $row["Описание"] . "</td>";
            $html .= "<td><button class='btn btn-primary btn-order' data-toggle='modal' data-target='#orderModal'>Заказать</button></td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    $conn->close();

    return $html;
}

?>

</body>
</html>
