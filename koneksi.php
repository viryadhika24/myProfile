<?php
$hostname = "localhost";
$database = "contact";
$username = "root";
$password = "";

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die ("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>