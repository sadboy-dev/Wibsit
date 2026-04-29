<?php

$host = "sql301.byetcluster.com"; // dari phpMyAdmin kamu
$user = "if0_41783664";           // username database
$pass = "PASSWORD_KAMU";          // ⚠️ ganti dengan password DB
$db   = "if0_41783664_game_db";   // nama database

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
