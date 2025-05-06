<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'koneksi.php';
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$message = $_POST["message"];

$query_sql = "INSERT INTO contactmessage (fullname, email, message)
VALUES ('$fullname', '$email', '$message')";


if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html?status=sukses");
    exit;
} else {
    echo "Send Message Gagal : " . mysqli_error($conn);
}
?>