<!DOCTYPE html>
<html>
<head>
    <title>Delivery ReHub - Роли</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Роли</h1>

        <?php
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

        // SQL запрос для выборки ролей
        $sql = "SELECT * FROM Roles";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных каждой роли в виде таблицы с использованием Bootstrap
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-hover'>";
            echo "<thead class='thead-dark'><tr><th>RoleID</th><th>RoleName</th></tr></thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["RoleID"] . "</td>";
                echo "<td>" . $row["RoleName"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table></div>";
        } else {
            echo "<div class='alert alert-info' role='alert'>0 результатов</div>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
