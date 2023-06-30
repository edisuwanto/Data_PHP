<!DOCTYPE html>
<html>
<head>
<meta charset="UTF">
<title>
Daftar Kursus Mitra Netra
</title>
</head>
<body>
<h1>
DAFTAR KURSUS YAYASAN MITRA NETRA
</h1>
<?php
echo "<table border='3'>";
echo "<tr>";
echo "<th>Nomor</th>";
echo "<th>Nama Kursus</th>";
echo "<th>Biaya</th>";
echo "<th>Nama Instruktur</th>";
echo "</tr>";
include "koneksi.php";
$tampil=mysqli_query($konek,"select * from daftar_kursus");
$no = 0;
while ($x = mysqli_fetch_array($tampil))
{
echo "<tr>";
echo "<td>";
echo $x['kode_kursus'];
echo "</td>";
echo "<td>";
echo $x['nama_kursus'];
echo "</td>";
echo "<td>";
echo $x['biaya_kursus'];
echo "</td>";
echo "<td>";
echo $x['nama_instruktur'];
echo "</td>";
echo "</tr>";
$no++;
}
echo "</table>";
?>
<a href = "input_kursus.php">kembali memasukkan data</a>

</body>
</html>
