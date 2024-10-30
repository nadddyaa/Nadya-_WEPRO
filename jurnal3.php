<?php

$buku = [
    ["buku" => "Berserk", "Penulis" => "Miura Kentaro"],
    ["buku" => "Oswald", "Penulis" => "Walt Disney"],  
];
$tambahbuku = [
    ["buku" => "Berserk", "Penulis" => "Miura Kentaro"],
    ["buku" => "Oswald", "Penulis" => "Walt Disney"],  
    ["buku"=> "One Piece", "Penulis"=> "Eiichiro Oda"],
];
$memperbaruibuku = [
    ["buku" => "Berserk", "Penulis" => "Miura Kentaro"],
    ["buku" => "Oswald", "Penulis" => "Walt Disney"],  
    ["buku"=> "Naruto", "Penulis"=> "Massahi Kishimoto"],
];

function tampilData($buku) {
    echo "Menampilkan Data Awal:";
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Judul</th>
            <th>Penulis</th>
          </tr>";
    foreach ($buku as $b) {
        echo "<tr>";
        echo "<td>{$b['buku']}</td>"; 
        echo "<td>{$b['Penulis']}</td>";
        echo "</tr>";    
    }
    echo "</table>";
}


tampilData($buku);

function tambahData($tambahbuku) {
    echo "Menambahkan Buku Baru:";
    echo "<br>";
    echo "<table border = '1'>";
    echo "<tr>
    <th>Judul</th>
    <th>Penulis</th>
  </tr>";
foreach ($tambahbuku as $t) {
    echo "<tr>";
    echo "<td>{$t['buku']}</td>"; 
    echo "<td>{$t['Penulis']}</td>";
     echo "</tr>";    
}
echo "</table>";

}
tambahData($tambahbuku);

function memperbaruiData($memperbaruibuku) {
    echo "Memperbarui Buku dengan ID ke -2:";
    echo "<br>";
    echo "<table border = '1'>";
    echo "<tr>
    <th>Judul</th>
    <th>Penulis</th>
  </tr>";
foreach ($memperbaruibuku as $t) {
    echo "<tr>";
    echo "<td>{$t['buku']}</td>"; 
    echo "<td>{$t['Penulis']}</td>";
     echo "</tr>";    
}
echo "</table>";

}
memperbaruiData($memperbaruibuku);

echo "Mengapus Buku dengan ID ke-1:";
unset($buku[1]);
$buku = array_values($buku);
tampilData($buku);

echo "Mencari Buku dengan kata kunci Naruto";
$

?>

