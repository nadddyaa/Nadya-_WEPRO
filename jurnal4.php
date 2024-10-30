<?php

 $databarang = [
    ["ID" => "1", "Nama Barang" =>"Buku", "Kategori Barang" => "Alat Tulis", "Harga" => "20000"],
    ["ID"=> "2", "Nama Barang"=>"Pulpen","Kategori Barang" => "Alat Tulis", "Harga" => "5000"]
 ];

if (isset($_POST["create"])) {
    $nama = $_POST['Nama Barang'];
    $kategori = $_POST['Kategori Barang'];
    $harga = $_POST['Harga Barang'];
}
if (isset($_POST['update'])) {
    $nama = $_POST['Nama Barang'];
    $kategori = $_POST['Kategori Barang'];
    $harga = $_POST['Harga Barang'];
}
if (isset($_POST['delete'])) {
    $index = $_POST['delete'];
    unset($databarang[$index]);
    $databarang = array_values($databarang);
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tambah Barang</h1>
<form method = "POST">
    <label for="nama"> Nama Barang:</label>
    <br>
    <input type="text" id="nama" name="nama" required> <br>

    <label for="kategori"> Kategori Barang:</label>
    <br>
    <input type="text" id="Kategori" name="kategori"required> <br>

    <label for="Harga"> Harga Barang:</label>
    <br>
    <input type="number" id="harga" nama="harga"required> <br>
    <input type="submit" name="create" value="Tambah Barang">
    <br>

    <h2> Daftar Barang</h2>
</form>
</body>
</html>


<?php
echo"<table border = '1'>";
foreach ($databarang as $b) {
    echo"<tr>";
       echo"<td>{$b['ID']}</td>" ;
        echo"<td>{$b['Nama Barang']}</td>";
        echo"<td>{$b['Kategori Barang']}</td>";
        echo"<td>{$b['Harga']}</td>";
         echo"<td>
    <form method='POST' style='display:inline-block;'>
      <input type='hidden' name='delete' value=''>
      <input type='submit' value='hapus'>
    </form>
    </td>";
    echo "</tr>";
    
      

}
