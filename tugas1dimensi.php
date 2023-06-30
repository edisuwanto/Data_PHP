<?php
$siswa = array (
array ("fenna fatharani", 90, 87, 98), 

array ("gilang purnama", 98, 76, 94), 

array ("angga gunawan", 67, 67, 97), 

array ("kania dewi", 97, 87, 95), 

array ("rakhmi isminarti", 87, 98, 87), 
);



echo "<ol>";
for($x =0;
$x <count($siswa);
$x++)
{
echo "<li>";

echo "nama : ";
echo $siswa [$x][0];

echo "<br>";

echo "nilai matematika : ";
echo $siswa [$x][1];

echo "<br>";

echo "nilai bahasa indonesia : ";
echo $siswa [$x][2];

echo "<br>";

echo "nilai IPA : ";
echo $siswa [$x][3];

echo "<br>";

echo "jumlah nilai :";
echo array_sum($siswa[$x]);


$jumlahnilai = array_sum($siswa[$x]);
$jumlahdata = count($siswa[$x]);
$average = $jumlahnilai/($jumlahdata-1);

echo "<br>";

echo "nilai rata-rata :";
echo $average;



}
echo "</ol>";

?>