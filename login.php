<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход</title>
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
            <h3 class="text-center">Вход</h3>
          </div>
          <div class="card-body">
            <form action="#" method="post">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php
    // PHP-скрипт для обработки входа пользователя
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DeliveryReHubBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT UserID, RoleID FROM Users WHERE Email='$email' AND Password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $user_id = $row['UserID'];
            $role_id = $row['RoleID'];

            setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Куки действительны 30 дней

            if ($role_id == 2) { // Роль "Производитель"
                header("Location: manufacture.php");
            } elseif ($role_id == 1) { // Роль "Клиент"
                header("Location: client.php");
            }
        }
    }

    $conn->close();
  ?>

</body>
</html>
