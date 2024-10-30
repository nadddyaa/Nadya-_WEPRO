<?php
function hitungIndeksNilai($nilai) {
   if ($nilai > 85){
return ("A");
   } elseif ($nilai >= 70 &&  $nilai <= 85) {
    return ("AB");
   }elseif ($nilai >= 60 && $nilai  <= 69) {
    return ("B");
   }elseif ($nilai >= 50 && $nilai <= 59) {
    return ("C");
   }else {
    return ("D");
   }

}

$nilaiSiswa = 80;
$indeks = hitungIndeksNilai($nilaiSiswa);
echo "Indeks nilai: " . $indeks; 

?>