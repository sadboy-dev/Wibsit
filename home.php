<?php
session_start();
include "config/database.php";

// Cek login
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}

$username = $_SESSION['user'];

// Ambil data user
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);
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

/* TOP MENU */
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

.category div {
  font-size: 12px;
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

/* FOOTER */
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background: #111;
  display: flex;
  justify-content: space-around;
  padding: 10px 0;
  font-size: 12px;
}
</style>
</head>

<body>

<!-- HEADER -->
<?php include "includes/header.php"; ?>

<!-- MENU -->
<div class="top-menu">
  <div>🏠 Home</div>
  <div>💰 Deposit</div>
  <div>📤 Withdraw</div>
  <div>📜 History</div>
  <div>📱 APK</div>
</div>

<!-- USER DATA -->
<div class="card">
  <div><b>User Data</b></div>
  <div>Balance: <span class="balance">Rp <?php echo number_format($user['balance']); ?></span></div>
  <div>Username: <?php echo $user['username']; ?></div>
</div>

<!-- REPORT -->
<div class="card">
  <div><b>Last Bet/Win Report</b></div>
  <div>No Data</div>
</div>

<!-- CATEGORY -->
<div class="category">
  <div>🎯 Togel</div>
  <div>🎰 Slot</div>
  <div>🎲 Casino</div>
  <div>⚽ Sport</div>
</div>

<!-- LIST PASARAN -->
<div class="list">
  <div class="item">TOTO WUHAN - Tutup: 3 jam</div>
  <div class="item">HK SIANG - Tutup: 10:30 WIB</div>
  <div class="item">SG METRO - Tutup: 12:30 WIB</div>
  <div class="item">SYDNEY - Tutup: 13:30 WIB</div>
  <div class="item">SINGAPORE - Tutup: 17:20 WIB</div>
  <div class="item">HONGKONG - Tutup: 22:00 WIB</div>
</div>

<!-- FOOTER -->
<div class="footer">
  <div>Deposit</div>
  <div>Withdraw</div>
  <div>Chat</div>
  <div>Livechat</div>
</div>

</body>
</html>
