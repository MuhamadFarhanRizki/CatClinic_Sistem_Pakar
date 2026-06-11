<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_sipakar_kucing";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Optional: set charset UTF-8
mysqli_set_charset($koneksi, "utf8");

?>