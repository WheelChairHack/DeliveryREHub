
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="img/favicon_io/site.webmanifest">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Регистрация</h3>
          </div>
          <div class="card-body">
            <form action="#" method="post">
              <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="phone">Номер телефона:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="role">Роль:</label>
                <select id="role" name="role" class="form-control" required>
                  <option value="Клиент">Клиент</option>
                  <option value="Производитель">Производитель</option>
                </select>
              </div>
              <div class="form-group" id="companyField" style="display:none;">
                <label for="company">Компания:</label>
                <input type="text" id="company" name="company" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
              </div>
              <div class="card-footer">
              <!— Кнопка для перехода к странице входа —>
              <button onclick="window.location.href = 'login.php';" class="btn btn-primary btn-block">Уже есть аккаунт? Войти</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php

    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Обработка POST запроса
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $phone = $_POST['phone'];
        $company = isset($_POST['company']) ? $_POST['company'] : null;

        // Получаем текущее максимальное значение UserID
        $sql_max_id = "SELECT MAX(UserID) AS max_id FROM Users";
        $result_max_id = $conn->query($sql_max_id);
        $row_max_id = $result_max_id->fetch_assoc();
        $max_id = $row_max_id["max_id"];

        // Прибавляем 1 к максимальному значению, чтобы получить новый уникальный ID пользователя
        $user_id = $max_id + 1;

        // Подготовка и выполнение запроса на вставку пользователя в базу данных
        $user_sql = "INSERT INTO Users (UserID, Email, Password, FullName, PhoneNumber, RoleID) VALUES ('$user_id', '$email', '$password', '$username', '$phone', (SELECT RoleID FROM Roles WHERE RoleName='$role'))";

        if ($conn->query($user_sql) === TRUE) {
            $sql_max_id = "SELECT MAX(CompanyID) AS max_id FROM Companies";
            $result_max_id = $conn->query($sql_max_id);
            $row_max_id = $result_max_id->fetch_assoc();
            $max_id = $row_max_id["max_id"];

            $company_id = $max_id + 1;

            // Если роль пользователя производитель, добавляем компанию
            if ($role === "Производитель" && !empty($company)) {
                $company_sql = "INSERT INTO Companies (CompanyID, CompanyName, UserID) VALUES ('$company_id', '$company', '$user_id')";

                setcookie("company_id", $company_id, time() + (86400 * 30), "/"); // Куки действительны 30 дней

                $conn->query($company_sql);
            }

            setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Куки действительны 30 дней

            if ($role === "Производитель") {
                header("Location: manufacture.php");
            } elseif ($role === "Клиент") {
                header("Location: client.php");
            }
        }
    }

    $conn->close();
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#role').change(function(){
        if($(this).val() == 'Производитель') {
          $('#companyField').show();
        } else {
          $('#companyField').hide();
        }
      });
    });
  </script>
</body>
</html>
