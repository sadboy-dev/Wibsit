<?php
session_start();
include "config/database.php";

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($query);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: home");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login XD4D</title>

<style>
body {
  margin: 0;
  font-family: Arial;
  background: #0c0c14;
  color: white;
}

.header {
  background: black;
  text-align: center;
  padding: 15px;
  font-size: 26px;
  font-weight: bold;
  color: gold;
  text-shadow: 0 0 10px gold;
}

.login-box {
  padding: 20px;
}

.input-box {
  display: flex;
  margin-bottom: 10px;
}

.input-box input {
  flex: 1;
  padding: 12px;
  border: none;
  outline: none;
  border-radius: 8px;
}

.input-icon {
  background: #333;
  padding: 12px;
  border-radius: 8px 0 0 8px;
}

.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  margin-top: 10px;
}

.login-btn {
  background: linear-gradient(to right, #ff5f6d, #ff9966);
}

.register-btn {
  background: linear-gradient(to right, #36d1dc, #5b86e5);
}

.error {
  color: red;
  margin-bottom: 10px;
}
</style>
</head>

<body>

<div class="header">XD4D</div>

<div class="login-box">

<?php if ($error != ""): ?>
  <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<form method="POST">

  <div class="input-box">
    <div class="input-icon">👤</div>
    <input type="text" name="username" placeholder="Username" required>
  </div>

  <div class="input-box">
    <div class="input-icon">🔒</div>
    <input type="password" name="password" placeholder="Password" required>
  </div>

  <button type="submit" name="login" class="btn login-btn">Masuk</button>

</form>

<a href="register">
  <button class="btn register-btn">Daftar Sekarang</button>
</a>

</div>

</body>
</html>
