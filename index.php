<?php
session_start();

// Jika sudah login → masuk ke dashboard
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XD4D</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #0c0c14;
  color: white;
  text-align: center;
}

/* HEADER */
.header {
  background: #000;
  padding: 15px;
  font-size: 28px;
  font-weight: bold;
  color: gold;
  text-shadow: 0 0 10px gold;
}

/* BANNER */
.banner {
  background: linear-gradient(to right, orange, red);
  padding: 30px 10px;
  font-size: 20px;
  font-weight: bold;
}

/* BUTTON */
.btn {
  margin-top: 20px;
  padding: 12px 20px;
  font-size: 16px;
  border: none;
  border-radius: 10px;
  width: 80%;
  max-width: 300px;
}

.login {
  background: linear-gradient(to right, #ff5f6d, #ff9966);
}

.register {
  background: linear-gradient(to right, #36d1dc, #5b86e5);
}
</style>
</head>

<body>

<div class="header">XD4D</div>

<div class="banner">
  🎉 BONUS ANGPAO IMLEK 🎉<br>
  Mainkan Game & Raih Jackpot!
</div>

<br><br>

<a href="login">
  <button class="btn login">Masuk</button>
</a>

<a href="register">
  <button class="btn register">Daftar</button>
</a>

</body>
</html>
