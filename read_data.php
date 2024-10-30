<?php
require_once("koneksi.php");

// Pastikan data di tabel matakuliah terisi. silahkan diisi manual saja
//eksekusi query
$sql = "SELECT * FROM matakuliah";
$result = mysqli_query($conn,$sql);

//tampilkan hasil query
while($data = mysqli_fetch_assoc($result)){
    echo $data['matakuliah']. " - ". $data["kodematakuliah"]. " - ". $data['sks'];
    echo "<br>";
}

echo "<a href='form_input.php'>Tambah data</a>";