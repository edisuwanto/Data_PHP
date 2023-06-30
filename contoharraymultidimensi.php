<?php
$siswa = array (
array ("fenna fatharani", "kosambi", 2000000), 

array ("gilang purnama", "cibaduyut", 5000000), 

array ("angga gunawan", "tegallega", 1000000), 

array ("kania dewi", "leuwi panjang", 400000), 

array ("rakhmi isminarti", "banjaran", 2000000), 
);
echo "<table border='3'";
echo "<tr>";
echo "<th>nama</th>";
echo "<th>alamat</th>";
echo "<th>jumlah uang</th>";
echo "</tr>";
for($x =0;
$x <count($siswa);
$x++)
{
echo "<tr>";
echo "<td>";
echo $siswa [$x][0];
echo "</td>";
echo "<td>";
echo $siswa [$x][1];
echo "</td>";
echo "<td>";
echo $siswa [$x][2];
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>