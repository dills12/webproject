<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mahasiswa";

$db = mysqli_connect($host, $user, $pass, $dbname);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>