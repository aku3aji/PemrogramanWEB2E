<?php
session_start();
if (!isset($_SESSION['user_check'])) {
    header("location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style_home.css">
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Selamat Datang</h1>
        </div>
    </header>

    <div class="container">
        <div class="card">
            <img src="assets/hotel1.jpg" alt="Hotel A">
            <h2>Hotel Indah</h2>
            <p>Hotel Indah adalah hotel mewah yang terletak di pusat kota. Dengan pemandangan yang memukau dan fasilitas
                yang lengkap, hotel ini adalah pilihan ideal untuk liburan Anda.</p>
            <button type="submit" class="detail-btn"><a href="detail_hotel1.php">Detail</a></button>
        </div>
        <div class="card">
            <img src="assets/hotel2.jpg" alt="Hotel B">
            <h2>Hotel Sejahtera</h2>
            <p>Hotel Sejahtera adalah hotel yang nyaman dan ramah lingkungan. Terletak di tengah-tengah alam yang indah,
                hotel ini menawarkan kenyamanan dan ketenangan bagi para tamu yang menginap.</p>
            <button type="submit" class="detail-btn"><a href="detail_hotel2.php">Detail</a></button>
        </div>
    </div>
    <div class="container">
        <form action="logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

</body>

</html>