
<!DOCTYPE html>
<html>
<head>
    <title>Delivery ReHub - Таблицы</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="img/favicon_io/site.webmanifest">
</head>
<body>
    <div class="container ">
        <h1 class="mt-5 mb-4">Delivery RE:Hub</h1>

        <!-- Sidebar -->
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-locations-tab" data-toggle="pill" href="#v-pills-locations" role="tab" aria-controls="v-pills-locations" aria-selected="true">Изделия</a>
                    <a class="nav-link" id="v-pills-routes-tab" data-toggle="pill" href="#v-pills-routes" role="tab" aria-controls="v-pills-routes" aria-selected="false">Маршруты</a>
                    <a class="nav-link" id="v-pills-warehouses-tab" data-toggle="pill" href="#v-pills-warehouses" role="tab" aria-controls="v-pills-warehouses" aria-selected="false">Склады</a>
                    <a class="nav-link" id="v-pills-pickuppoints-tab" data-toggle="pill" href="#v-pills-pickuppoints" role="tab" aria-controls="v-pills-pickuppoints" aria-selected="false">Пункты выдачи</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-locations" role="tabpanel" aria-labelledby="v-pills-locations-tab">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">Добавить изделие</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#editModal">Изменить изделие</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#deleteModal">Удалить изделие</button>
    
                        <!-- Модальное окно для добавления нового изделия -->
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Добавить изделие</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="itemName">Название изделия:</label>
                                                <input type="text" class="form-control" id="itemName" name="itemName" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="itemPhoto">Фотография:</label>
                                                <input type="file" class="form-control-file" id="itemPhoto" name="itemPhoto">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemDimensions">Размеры (ШxДxВ):</label>
                                                <input type="text" class="form-control" id="itemDimensions" name="itemDimensions">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemWeight">Вес (кг):</label>
                                                <input type="text" class="form-control" id="itemWeight" name="itemWeight">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemPrice">Цена:</label>
                                                <input type="text" class="form-control" id="itemPrice" name="itemPrice">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemDescription">Описание:</label>
                                                <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="addProduct">Добавить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Модальное окно для изменения изделия -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Изменить изделие</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="itemID">Номер изделия:</label>
                                                <input type="int" class="form-control" id="itemID" name="itemID" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="itemName">Название изделия:</label>
                                                <input type="text" class="form-control" id="itemName" name="itemName" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="itemPhoto">Фотография:</label>
                                                <input type="file" class="form-control-file" id="itemPhoto" name="itemPhoto">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemDimensions">Размеры (ШxДxВ):</label>
                                                <input type="text" class="form-control" id="itemDimensions" name="itemDimensions">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemWeight">Вес (кг):</label>
                                                <input type="text" class="form-control" id="itemWeight" name="itemWeight">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemPrice">Цена:</label>
                                                <input type="text" class="form-control" id="itemPrice" name="itemPrice">
                                            </div>
                                            <div class="form-group">
                                                <label for="itemDescription">Описание:</label>
                                                <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="editProduct">Изменить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- Модальное окно для удаления изделия -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Удалить изделие</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="itemName">Номер изделия:</label>
                                                <input type="text" class="form-control" id="itemName" name="itemName" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="deleteProduct">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo getProductionItem(); ?>

                    </div>
                    <div class="tab-pane fade" id="v-pills-routes" role="tabpanel" aria-labelledby="v-pills-routes-tab">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addRouteModal">Добавить маршрут</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#editRouteModal">Изменить маршрут</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#deleteRouteModal">Удалить маршрут</button>

                        <!-- Модальное окно для добавления нового маршрута -->
                        <div class="modal fade" id="addRouteModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Добавить маршрут</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="startLocationID">Начальное местоположение:</label>
                                                <select class="form-control" id="startLocationID" name="startLocationID" required>
                                                    <?php
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                        }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="endLocationID">Конечное местоположение:</label>
                                                <select class="form-control" id="endLocationID" name="endLocationID" required>
                                                    <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                        }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="distance">Расстояние (км):</label>
                                                <input type="text" class="form-control" id="distance" name="distance" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="time">Время (чч:мм):</label>
                                                <input type="text" class="form-control" id="time" name="time" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cost">Стоимость:</label>
                                                <input type="text" class="form-control" id="cost" name="cost" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="addRoute">Добавить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <!-- Модальное окно для изменения маршрута -->
                        <div class="modal fade" id="editRouteModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Изменить изделие</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="routeID">Номер маршрута:</label>
                                                <input type="int" class="form-control" id="routeID" name="routeID" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="startLocationID">Начальное местоположение:</label>
                                                <select class="form-control" id="startLocationID" name="startLocationID" required>
                                                                                                        <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                        }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="endLocationID">Конечное местоположение:</label>
                                                <select class="form-control" id="endLocationID" name="endLocationID" required>
                                                                                                        <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                        }
                                                    }

                                                    $conn->close();
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="distance">Расстояние (км):</label>
                                                <input type="text" class="form-control" id="distance" name="distance" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="time">Время (чч:мм):</label>
                                                <input type="text" class="form-control" id="time" name="time" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cost">Стоимость:</label>
                                                <input type="text" class="form-control" id="cost" name="cost" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="editRoute">Изменить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <!-- Модальное окно для удаления маршрута -->
                        <div class="modal fade" id="deleteRouteModal" tabindex="-1" role="dialog" aria-labelledby="deleteRouteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteRouteModalLabel">Удалить маршрут</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="routeID">Номер маршрута:</label>
                                                <input type="text" class="form-control" id="routeID" name="routeID" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="deleteRoute">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo getRoutesData(); ?>
                </div>
                    <div class="tab-pane fade" id="v-pills-warehouses" role="tabpanel" aria-labelledby="v-pills-warehouses-tab">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addWarehouseModal">Добавить склад</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#editWarehouseModal">Изменить склад</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#deleteWarehouseModal">Удалить склад</button>
                        <!-- Модальное окно для добавления нового склада -->
                        <div class="modal fade" id="addWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="addWarehouseModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addWarehouseModalLabel">Добавить склад</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="LocationID">Населённый пункт:</label>
                                                <select class="form-control" id="LocationID" name="LocationID" required>
                                                    <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                    }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="addWarehouse">Добавить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Модальное окно для изменения склада -->
                        <div class="modal fade" id="editWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="editWarehouseModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editWarehouseModalLabel">Изменить склад</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="WarehouseID">Номер склада:</label>
                                                <input type="int" class="form-control" id="WarehouseID" name="WarehouseID" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="LocationID">Населённый пункт:</label>
                                                <select class="form-control" id="LocationID" name="LocationID" required>
                                                    <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                    }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="editWarehouse">Изменить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Модальное окно для удаления склада -->
                        <div class="modal fade" id="deleteWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="deleteWarehouseModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteWarehouseModalLabel">Удалить склад</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="WarehouseID">Номер склада:</label>
                                                <input type="text" class="form-control" id="WarehouseID" name="WarehouseID" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="deleteWarehouse">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo getWarehousesData(); ?>
                </div>
                    <div class="tab-pane fade" id="v-pills-pickuppoints" role="tabpanel" aria-labelledby="v-pills-pickuppoints-tab">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addPickupPointModal">Добавить пункт выдачи</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#editPickupPointModal">Изменить пункт выдачи</button>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#deletePickupPointModal">Удалить пункт выдачи</button>
                        <!-- Модальное окно для добавления нового пункта выдачи -->
                        <div class="modal fade" id="addPickupPointModal" tabindex="-1" role="dialog" aria-labelledby="addPickupPointModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addPickupPointModalLabel">Добавить пункт выдачи</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="LocationID">Населённый пункт:</label>
                                                <select class="form-control" id="LocationID" name="LocationID" required>
                                                    <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                    }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="addPickupPoint">Добавить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Модальное окно для изменения пункта выдачи -->
                        <div class="modal fade" id="editPickupPointModal" tabindex="-1" role="dialog" aria-labelledby="editPickupPointModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editPickupPointModalLabel">Изменить пункт выдачи</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="PickupPointID">Номер пункта выдачи:</label>
                                                <input type="int" class="form-control" id="PickupPointID" name="PickupPointID" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="LocationID">Населённый пункт:</label>
                                                <select class="form-control" id="LocationID" name="LocationID" required>
                                                    <?php
                                                    // Подключение к базе данных (вам нужно заменить эти данные на ваши)
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "DeliveryReHubBD";

                                                    // Создание соединения
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Проверка соединения
                                                    if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // SQL запрос для получения всех локаций из таблицы Locations
                                                    $sql = "SELECT LocationID, LocationName FROM Locations";
                                                    $result = $conn->query($sql);

                                                    // Вывод опций для выпадающего списка
                                                    if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row["LocationID"] . "'>" . $row["LocationName"] . "</option>";
                                                    }
                                                    }

                                                    // Закрытие соединения
                                                    $conn->close();
                                                    ?>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="editPickupPoint">Изменить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Модальное окно для удаления пункта выдачи -->
                        <div class="modal fade" id="deletePickupPointModal" tabindex="-1" role="dialog" aria-labelledby="deletePickupPointModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deletePickupPointModalLabel">Удалить пункт выдачи</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="PickupPointID">Номер пункта выдачи:</label>
                                                <input type="text" class="form-control" id="PickupPointID" name="PickupPointID" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="deletePickupPoint">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo getPickupPointsData(); ?>
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

if(isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    // Если куки не установлены, редиректим на страницу регистрации
    header("Location: registration.php");
    exit();
}

// Функция для добавления нового изделия в базу данных
function addProductItem($item_id, $itemName, $itemPhoto, $company_id, $itemDimensions, $itemWeight, $itemPrice, $itemDescription) {

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для добавления нового изделия
    $sql = "INSERT INTO ProductionItems (ItemID, ItemName, Photo, CompanyID, Dimensions, Weight, Price, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем типы данных для каждого параметра
    $stmt->bind_param("issisdds", $item_id, $itemName, $itemPhoto, $company_id, $itemDimensions, $itemWeight, $itemPrice, $itemDescription);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

// Подключение к базе данных
$servername = "localhost"; // Имя сервера
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль базы данных
$dbname = "DeliveryReHubBD"; // Имя базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if(isset($_POST['addProduct'])) {
    $company_id = $_COOKIE['company_id'];

    $itemName = $_POST['itemName'];
    $itemPhoto = file_get_contents($_FILES['itemPhoto']['tmp_name']); // Путь к временному файлу фотографии
    $itemDimensions = $_POST['itemDimensions'];
    $itemWeight = $_POST['itemWeight'];
    $itemPrice = $_POST['itemPrice'];
    $itemDescription = $_POST['itemDescription'];

    // Получаем текущее максимальное значение UserID
    $sql_max_id = "SELECT MAX(ItemID) AS max_id FROM ProductionItems";
    $result_max_id = $conn->query($sql_max_id);
    $row_max_id = $result_max_id->fetch_assoc();
    $max_id = $row_max_id["max_id"];

    // Прибавляем 1 к максимальному значению, чтобы получить новый уникальный ID пользователя
    $item_id = $max_id + 1;

    // Дополнительная обработка фотографии, например, загрузка на сервер или сохранение в базе данных

    $result = addProductItem($item_id, $itemName, $itemPhoto, $company_id, $itemDimensions, $itemWeight, $itemPrice, $itemDescription);
}

function updateProductItem($itemName, $itemPhoto, $itemDimensions, $itemWeight, $itemPrice, $itemDescription, $item_id, $company_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 60);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для обновления изделия
    $sql = "UPDATE ProductionItems SET ItemName=?, Photo=?, Dimensions=?, Weight=?, Price=?, Description=? WHERE ItemID=? AND CompanyID=?";

    $stmt = $conn->prepare($sql);

    // Указываем типы данных для каждого параметра
    $stmt->bind_param("sssddsii", $itemName, $itemPhoto, $itemDimensions, $itemWeight, $itemPrice, $itemDescription, $item_id, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['editProduct'])) {
    $item_id = $_POST['itemID'];
    $company_id = $_COOKIE['company_id'];

    $itemName = $_POST['itemName'];
    $itemPhoto = file_get_contents($_FILES['itemPhoto']['tmp_name']); // Путь к временному файлу фотографии
    $itemDimensions = $_POST['itemDimensions'];
    $itemWeight = $_POST['itemWeight'];
    $itemPrice = $_POST['itemPrice'];
    $itemDescription = $_POST['itemDescription'];

    // Дополнительная обработка фотографии, например, загрузка на сервер или сохранение в базе данных

    $result = updateProductItem($itemName, $itemPhoto, $itemDimensions, $itemWeight, $itemPrice, $itemDescription, $item_id, $company_id );
}

function deleteProductionItem($item_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для удаления записи о продукции
    $sql = "DELETE FROM ProductionItems WHERE ItemID = ?";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем тип данных для параметра
    $stmt->bind_param("i", $item_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['deleteProduct'])) {
    $itemName = $_POST['itemName'];

    $result = deleteProductionItem($itemName);
}


// Функция для получения данных из таблицы ProductionItems
function getProductionItem() {

    $user_id = $_COOKIE['user_id'];

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT PI.ItemID AS ID_Изделия, PI.ItemName AS Название, PI.Photo AS Изображение, PI.Dimensions AS Размеры, PI.Weight AS Вес, PI.Price AS Цена, PI.Description AS Описание FROM ProductionItems PI WHERE EXISTS (SELECT 1 FROM Companies C WHERE C.UserID = '$user_id' AND C.CompanyID = PI.CompanyID)";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark'><tr><th>№ Изделия</th><th>Название</th><th>Изображение</th><th>Размеры</th><th>Вес</th><th>Цена</th><th>Описание</th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["ID_Изделия"] . "</td>";
            $html .= "<td>" . $row["Название"] . "</td>";
            $html .= "<td><img src='data:image/jpeg;base64," . base64_encode($row['Изображение']) . "' alt='item photo' style='max-width:100px'></td>";
            $html .= "<td>" . $row["Размеры"] . "</td>";
            $html .= "<td>" . $row["Вес"] . "</td>";
            $html .= "<td>" . $row["Цена"] . "</td>";
            $html .= "<td>" . $row["Описание"] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    // Закрытие соединения с базой данных
    $conn->close();

    return $html;
}


// Функция для получения данных из таблицы Routes
function getRoutesData() {

    $user_id = $_COOKIE['user_id'];

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT Routes.RouteID AS Номер_маршрута, Locations_Start.LocationName AS Начальный_пункт, Locations_End.LocationName AS Конечный_пункт, Routes.Distance AS Протяжённость_км, Routes.Time AS Время_пути, Routes.Cost AS Стоимость FROM Routes INNER JOIN Locations AS Locations_Start ON Routes.StartLocationID = Locations_Start.LocationID INNER JOIN Locations AS Locations_End ON Routes.EndLocationID = Locations_End.LocationID WHERE EXISTS (SELECT 1 FROM Companies C WHERE C.UserID = '$user_id' AND C.CompanyID = Routes.CompanyID)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark sticky-top'><tr><th>Номер маршрута</th><th>Начальный пункт</th><th>Конечный пункт</th><th>Протяжённость (км)</th><th>Время пути</th><th>Стоимость</th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["Номер_маршрута"] . "</td>";
            $html .= "<td>" . $row["Начальный_пункт"] . "</td>";
            $html .= "<td>" . $row["Конечный_пункт"] . "</td>";
            $html .= "<td>" . $row["Протяжённость_км"] . "</td>";
            $html .= "<td>" . $row["Время_пути"] . "</td>";
            $html .= "<td>" . $row["Стоимость"] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    // Закрытие соединения с базой данных
    $conn->close();

    return $html;
}

function addRoute($route_id, $startLocationID, $endLocationID, $distance, $time, $cost, $company_id) {
    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для добавления нового маршрута
    $sql = "INSERT INTO Routes (RouteID, StartLocationID, EndLocationID, Distance, Time, Cost, CompanyID) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем типы данных для каждого параметра
    $stmt->bind_param("iiidsdi", $route_id, $startLocationID, $endLocationID, $distance, $time, $cost, $company_id);

    if ($stmt->execute() === TRUE) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}

// Обработчик формы добавления маршрута
if(isset($_POST['addRoute'])) {
    $company_id = $_COOKIE['company_id'];

    // Получаем данные из формы
    $startLocationID = $_POST['startLocationID'];
    $endLocationID = $_POST['endLocationID'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];
    $cost = $_POST['cost'];

    // Получаем текущее максимальное значение UserID
    $sql_max_id = "SELECT MAX(RouteID) AS max_id FROM Routes";
    $result_max_id = $conn->query($sql_max_id);
    $row_max_id = $result_max_id->fetch_assoc();
    $max_id = $row_max_id["max_id"];

    // Прибавляем 1 к максимальному значению, чтобы получить новый уникальный ID пользователя
    $route_id = $max_id + 1;

    // Вызываем функцию для добавления маршрута
    $result = addRoute($route_id, $startLocationID, $endLocationID, $distance, $time, $cost, $company_id);
}


// Функция для обновления информации о маршруте в базе данных
function updateRoute($routeID, $startLocationID, $endLocationID, $distance, $time, $cost) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 60);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для обновления маршрута
    $sql = "UPDATE Routes SET StartLocationID=?, EndLocationID=?, Distance=?, Time=?, Cost=? WHERE RouteID=?";

    $stmt = $conn->prepare($sql);

    // Указываем типы данных для каждого параметра
    $stmt->bind_param("iidssi", $startLocationID, $endLocationID, $distance, $time, $cost, $routeID);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['editRoute'])) {
    $routeID = $_POST['routeID'];
    $startLocationID = $_POST['startLocationID'];
    $endLocationID = $_POST['endLocationID'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];
    $cost = $_POST['cost'];
    
    // Вызываем функцию для обновления маршрута
    $result = updateRoute($routeID, $startLocationID, $endLocationID, $distance, $time, $cost);
}




function deleteRoute($route_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для удаления записи о маршруте
    $sql = "DELETE FROM Routes WHERE RouteID = ?";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем тип данных для параметра
    $stmt->bind_param("i", $route_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

// Проверяем, была ли отправлена форма
if(isset($_POST['deleteRoute'])) {
    $routeID = $_POST['routeID']; // Предполагается, что значение элемента формы содержит идентификатор маршрута

    // Вызываем функцию удаления
    $result = deleteRoute($routeID);
}

// Функция для получения данных из таблицы Warehouses
function getWarehousesData() {

    $user_id = $_COOKIE['user_id'];

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT WarehouseID AS Склад, LocationName AS Населённый_пункт FROM Warehouses INNER JOIN Locations ON Warehouses.LocationID = Locations.LocationID WHERE EXISTS (SELECT 1 FROM Companies C WHERE C.UserID = '$user_id' AND C.CompanyID = Warehouses.CompanyID)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark'><tr><th>№ Склада</th><th>Населённый пункт</th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["Склад"] . "</td>";
            $html .= "<td>" . $row["Населённый_пункт"] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    // Закрытие соединения с базой данных
    $conn->close();

    return $html;
}

// Функция для добавления нового склада в базу данных
function addWarehouse($warehouseID, $locationID, $company_id) {
    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для добавления нового склада
    $sql = "INSERT INTO Warehouses (WarehouseID, LocationID, CompanyID) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("iii", $warehouseID, $locationID, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

// Обработчик формы добавления склада
if(isset($_POST['addWarehouse'])) {
    $company_id = $_COOKIE['company_id'];

    // Получаем данные из формы
    $locID = $_POST['LocationID'];
    
    // Получаем текущее максимальное значение WarehouseID
    $sql_max_id = "SELECT MAX(WarehouseID) AS max_id FROM Warehouses";
    $result_max_id = $conn->query($sql_max_id);
    $row_max_id = $result_max_id->fetch_assoc();
    $max_id = $row_max_id["max_id"];

    // Прибавляем 1 к максимальному значению, чтобы получить новый уникальный ID склада
    $warehouse_id = $max_id + 1;
    
    // Вызываем функцию для добавления склада
    $result = addWarehouse($warehouse_id,  $locID, $company_id);
}

// Функция для обновления информации о складе в базе данных
function updateWarehouse($warehouseID, $locationID, $company_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 60);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для обновления изделия
    $sql = "UPDATE Warehouses SET LocationID=? WHERE WarehouseID=? AND CompanyID=?";

    $stmt = $conn->prepare($sql);

    // Указываем типы данных для каждого параметра
    $stmt->bind_param("iii", $locationID, $warehouseID, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['editWarehouse'])) {
    $warehouse_id = $_POST['WarehouseID'];
    $company_id = $_COOKIE['company_id'];
    $locID = $_POST['LocationID'];
    
    // Вызываем функцию для добавления склада
    $result = updateWarehouse($warehouse_id,  $locID, $company_id);

}

// Функция для удаления склада из базы данных
function deleteWarehouse($warehouse_id, $company_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для удаления записи о продукции
    $sql = "DELETE FROM Warehouses WHERE WarehouseID = ? AND CompanyID = ?";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем тип данных для параметра
    $stmt->bind_param("ii", $warehouse_id, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['deleteWarehouse'])) {
    $company_id = $_COOKIE['company_id'];
    $warehouse_id = $_POST['WarehouseID'];

    $result = deleteWarehouse($warehouse_id, $company_id);
}

// Функция для получения данных из таблицы PickupPoints
function getPickupPointsData() {

    $user_id = $_COOKIE['user_id'];

    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "SELECT PickupPointID AS Пункт_выдачи, LocationName AS Населённый_пункт FROM PickupPoints INNER JOIN Locations ON PickupPoints.LocationID = Locations.LocationID WHERE EXISTS (SELECT 1 FROM Companies C WHERE C.UserID = '$user_id' AND C.CompanyID = PickupPoints.CompanyID)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $html = "<div class='table-responsive'>";
        $html .= "<table class='table table-bordered table-hover'>";
        $html .= "<thead class='thead-dark'><tr><th>№ Пункта выдачи</th><th>Населённый пункт</th></tr></thead>";
        $html .= "<tbody>";
        while($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["Пункт_выдачи"] . "</td>";
            $html .= "<td>" . $row["Населённый_пункт"] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</tbody></table></div>";
    } else {
        $html = "<div class='alert alert-info' role='alert'>0 результатов</div>";
    }

    // Закрытие соединения с базой данных
    $conn->close();

    return $html;
}

function addPickupPoint($pickuppoint_id, $locationID, $company_id) {
    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для добавления нового склада
    $sql = "INSERT INTO Pickuppoints (PickupPointID, LocationID, CompanyID) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("iii", $pickuppoint_id, $locationID, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

// Обработчик формы добавления склада
if(isset($_POST['addPickupPoint'])) {
    $company_id = $_COOKIE['company_id'];

    // Получаем данные из формы
    $locID = $_POST['LocationID'];
    
    // Получаем текущее максимальное значение WarehouseID
    $sql_max_id = "SELECT MAX(PickupPointID) AS max_id FROM Pickuppoints";
    $result_max_id = $conn->query($sql_max_id);
    $row_max_id = $result_max_id->fetch_assoc();
    $max_id = $row_max_id["max_id"];

    // Прибавляем 1 к максимальному значению, чтобы получить новый уникальный ID склада
    $pickuppoint_id = $max_id + 1;
    
    // Вызываем функцию для добавления склада
    $result = addPickupPoint($pickuppoint_id,  $locID, $company_id);
}

// Функция для обновления информации о складе в базе данных
function updatePickupPoint($pickuppoint_id, $locationID, $company_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 60);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для обновления изделия
    $sql = "UPDATE Pickuppoints SET LocationID=? WHERE PickupPointID=? AND CompanyID=?";

    $stmt = $conn->prepare($sql);

    // Указываем типы данных для каждого параметра
    $stmt->bind_param("iii", $locationID, $pickuppoint_id, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['editPickupPoint'])) {
    $pickuppoint_id = $_POST['PickupPointID'];
    $company_id = $_COOKIE['company_id'];
    $locID = $_POST['LocationID'];
    
    // Вызываем функцию для добавления склада
    $result = updatePickupPoint($pickuppoint_id,  $locID, $company_id);

}

// Функция для удаления склада из базы данных
function deletePickupPoint($pickuppoint_id, $company_id) {
    // Подключение к базе данных
    $servername = "localhost"; // Имя сервера
    $username = "root"; // Имя пользователя базы данных
    $password = ""; // Пароль базы данных
    $dbname = "DeliveryReHubBD"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовка SQL запроса для удаления записи о продукции
    $sql = "DELETE FROM Pickuppoints WHERE PickupPointID = ? AND CompanyID = ?";

    // Подготовка и выполнение запроса с использованием подготовленных выражений
    $stmt = $conn->prepare($sql);
    // Указываем тип данных для параметра
    $stmt->bind_param("ii", $pickuppoint_id, $company_id);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

if(isset($_POST['deletePickupPoint'])) {
    $company_id = $_COOKIE['company_id'];
    $pickuppoint_id = $_POST['PickupPointID'];

    $result = deletePickupPoint($pickuppoint_id, $company_id);
}
?>
</body>
</html>