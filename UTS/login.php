<?php
session_start();
require_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND Password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    $_SESSION['user_check'] = $email;
    header("location: home.php");
} else {
    echo "<script>
        alert('Login gagal. email atau password salah.');
        window.location.href = 'index.html';
        </script>";
}
