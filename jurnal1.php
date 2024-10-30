<?php
echo"a =7 ";
echo "<br>";
echo "b = 8 ";
echo "<br>";
echo "c = 5";
echo "<br>";

$pilihan = 5;
echo "<br>";

$a =7;
$b =8;
$c =5;
echo "<br>";

if ($pilihan == 1){
  echo " hasil penjumlahan =";

  echo $a - $b ;
  echo "<br>";
}

elseif ($pilihan == 2 ){
    echo "hasil rata rata =  ";

echo ($a + $b + $c)/3;
echo "<br>";
}

elseif ($pilihan  == 3){
echo " hasil penjumlahan =";
  $a = 7;
  $b = 5;
  echo $a + $b ;
  echo "<br>";

   echo "hasil rata rata =  ";
$c = 5;
$d = 5;
echo ($a + $b + $c)/3;
echo "<br>";
}

else {
};

?>

