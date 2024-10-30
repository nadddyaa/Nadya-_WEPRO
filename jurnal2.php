<?php
$daftarBuah = [
    'apel' => 10000,
    'pisang' => 5000,
    'mangga' => 15000
];

function cekKetersediaanBuah($inputBuah, $daftarBuah) {
    foreach($daftarBuah as $buah => $harga){
        if ($inputBuah == $buah){
            return true;
        }
    }
    return false;
}

$inputBuah = strtolower(readline("Masukkan nama buah: "));
$buahtersedia = cekKetersediaanBuah($inputBuah, $daftarBuah);

if ($buahtersedia === true) {
    $inputjumlah = (int)readline("masukkan jumlah: ");
    
    
    $harga = $daftarBuah[$inputBuah];
    $totalharga = $inputjumlah * $harga;
    $diskon = $totalharga * 0.15;
    $jumlah_dibayar = $totalharga - $diskon;
    echo "Total harga untuk $inputjumlah $inputBuah adalah Rp $jumlah_dibayar";

    echo "Total harga untuk $inputjumlah $inputBuah adalah Rp $totalharga";
} else {
    echo "Maaf, buah tidak tersedia.";
}
?>