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
    <title>Hotel Reservation 2</title>
    <link rel="stylesheet" href="style_detail2.css">

</head>

<body>
    <header>
        <h1>Hotel Sejahtera</h1>
        <p>Hotel Sejahtera adalah hotel yang nyaman dan ramah lingkungan. Terletak di tengah-tengah alam yang indah,
            hotel ini menawarkan kenyamanan dan ketenangan bagi para tamu yang menginap.</p>
    </header>

    <section>
        <h2>Pemesanan Kamar Hotel Sejahtera</h2>
        <form method="POST" id="reservationForm">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" required>

            <label for="birthdate">Tanggal Lahir:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="roomtype">Tipe Kamar:</label>
            <select id="roomtype" name="roomtype" required>
                <option value="standard">Standard (Rp. 500.000)</option>
                <option value="deluxe">Deluxe (Rp. 1.000.000)</option>
                <option value="suite">Suite (Rp. 15.000.000)</option>
            </select>

            <label for="price">Harga:</label>
            <input type="text" id="price" name="price" readonly>

            <label for="guests">Jumlah Orang (Maks 4 Orang):</label>
            <input type="number" id="guests" name="guests" min="1" max="4" required>

            <button type="submit">Submit Reservation</button>
        </form>
    </section>
    <section id="reservationList">
        <h2>Reservation List</h2>
        <table id="reservationTable">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>TANGGAL LAHIR</th>
                    <th>TIPE KAMAR</th>
                    <th>HARGA</th>
                    <th>JUMLAH ORANG</th>
                </tr>
            </thead>
            <tbody id="reservationData"></tbody>
        </table>
    </section>
    <script src="script_hotel2.js"></script>

</body>

</html>