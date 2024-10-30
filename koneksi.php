<?php

$host = "Localhost";
$user = "root";
$pass = "";

$db = "kuliahwebpro";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
else{
    echo "Koneksi berhasil <br>";
}