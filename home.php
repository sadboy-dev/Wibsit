<?php
session_start();

// Proteksi halaman
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home XD4D</title>

<style>
body {
  margin: 0;
  font-family: Arial;
  background: #0c0c14;
  color: white;
}

/* HEADER */
.header {
  background: #111;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  color: gold;
  font-weight: bold;
  font-size: 22px;
}

.user {
  font-size: 14px;
}

/* MENU TOP */
.top-menu {
  display: flex;
  justify-content: space-around;
  background: #1a1a2e;
  padding: 10px;
  font-size: 12px;
}

/* CARD */
.card {
  background: #1a1a2e;
  margin: 10px;
  padding: 10px;
  border-radius: 10px;
}

.balance {
  color: gold;
  font-weight: bold;
}

/* CATEGORY */
.category {
  display: flex;
  justify-content: space-around;
  margin: 10px 0;
  text-align: center;
}

/* LIST */
.list {
  margin: 10px;
}

.item {
  background: linear-gradient(to right, #c9a100, #ffd700);
  color: black;
  padding: 12px;
  border-radius: 8px;
  margin-bottom: 8px;
  font-weight: bold;
}
</style>
</head>

<body>

<div class="header">
  <div class="logo">XD4D</div>
  <div class="user">👤 <?php echo $user; ?></div>
</div>

<div class="top-menu">
  <div>Home</div>
  <div>Deposit</div>
  <div>Withdraw</div>
  <div>History</div>
  <div>APK</div>
</div>

<div class="card">
  <div>User Data</div>
  <div>Balance: <span class="balance">Rp 295</span></div>
  <div>Last Login: -</div>
</div>

<div class="card">
  <div>Last Bet/Win Report</div>
  <div>No Data</div>
</div>

<div class="category">
  <div>Togel</div>
  <div>Slot</div>
  <div>Casino</div>
  <div>Sport</div>
</div>

<div class="list">
  <div class="item">TOTO WUHAN - Tutup: 3 jam</div>
  <div class="item">HK SIANG - Tutup: 10:30</div>
  <div class="item">SG METRO - Tutup: 12:30</div>
  <div class="item">SYDNEY - Tutup: 13:30</div>
  <div class="item">SINGAPORE - Tutup: 17:20</div>
  <div class="item">HONGKONG - Tutup: 22:00</div>
</div>

</body>
</html>
