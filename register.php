<?php
session_start();
include "config/database.php";

$msg = "";

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    // Validasi
    if ($password != $confirm) {
        $msg = "Password tidak sama!";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($check) > 0) {
            $msg = "Username sudah dipakai!";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            mysqli_query($conn, "INSERT INTO users (username, password, balance) VALUES ('$username','$hash',1000)");

            $msg = "Registrasi berhasil! Silakan login.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register XD4D</title>

<style>
body { background:#0c0c14; color:white; font-family:Arial; }
.header { text-align:center; padding:15px; font-size:24px; color:gold; }
.box { padding:20px; }
input { width:100%; padding:12px; margin-bottom:10px; border-radius:8px; border:none; }
button { width:100%; padding:12px; border:none; border-radius:8px; }
.reg { background:linear-gradient(to right,#36d1dc,#5b86e5); }
.msg { color:yellow; margin-bottom:10px; }
</style>
</head>

<body>

<div class="header">XD4D</div>

<div class="box">

<?php if($msg != "") echo "<div class='msg'>$msg</div>"; ?>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="password" name="confirm" placeholder="Konfirmasi Password" required>

<button name="register" class="reg">Daftar</button>
</form>

</div>

</body>
</html>
