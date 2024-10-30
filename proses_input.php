<?php

require_once("koneksi.php");

$nama_mata_kuliah = $_POST['nama_mata_kuliah'];
$kode_mata_kuliah = $_POST['kode_mata_kuliah'];
$sks              = $_POST['sks'];

$sql = "INSERT INTO matakuliah(matakuliah, kodematakuliah, sks)
        VALUES('$nama_mata_kuliah','$kode_mata_kuliah',$sks)";
//debugging query
//echo sql
if(mysqli_query($conn, $sql)){
    header("Location: read_data.php");
}
else{
    echo "Error:" .$sql. "<br>" . mysqli_error($conn);
}