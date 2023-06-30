<?php
$siswa = array (
array ("fenna fatharani", 90, 87, 98), 

array ("gilang purnama", 98, 76, 94), 

array ("angga gunawan", 67, 67, 97), 

array ("kania dewi", 97, 87, 95), 

array ("rakhmi isminarti", 87, 98, 87), 
);
echo "<table border='3'";
echo "<tr>";
echo "<th>no</th>";
echo "<th>nama</th>";
echo "<th>nilai matematika</th>";
echo "<th>nilai bahasa indonesia</th>";
echo"<th>nilai IPA</th>";
echo "<th>jumlah nilai</th>";
 echo "<th>nilai rata-rata</th>";
echo "</tr>";
for($x =0;
$x <count($siswa);
$x++)
{
echo "<tr>";
echo "<td>";
echo $x+1;
echo "</td>";
echo "<td>";
echo $siswa [$x][0];
echo "</td>";
echo "<td>";
echo $siswa [$x][1];
echo "</td>";
echo "<td>";
echo $siswa [$x][2];
echo "</td>";
echo "<td>";
echo $siswa [$x][3];
echo "</td>";
echo "<td>";
echo array_sum($siswa[$x]);
echo"</td>";
echo "<td>";
$jumlahnilai = array_sum($siswa[$x]);
$jumlahdata = count($siswa[$x]);
$average = $jumlahnilai/($jumlahdata-1);
echo $average;
echo "</td>";

echo "</tr>";
}
echo "</table>";
?>