<html>
<head>
<title></title>
</head>
<body>
<h1>daftar peserta jarimatika


 </h1>

<a href ="index.php">beranda</a>
<br>

<a href="tampil_mengetik.php">peserta mengetik sepuluh jari</a>
<br>
<a href ="tampil_programming.php">peserta komputer programming</a>
<br>

<a href ="tampil_dasar.php">peserta paket dasar komputer</a>
<br>

<a href ="tampil_excel.php">peserta microsoft excel</a>
<br>

<a href ="tampil_ppt.php">peserta microsoft power point</a>
<br>

<a href ="tampil_internet.php">peserta internet tingkat lanjut</a>
<br>

<a href ="tampil_musik.php">peserta musik arranger</a>
<br>
<a href ="tampil_jarimatika.php">peserta jarimatika</a>
<br>
<a href ="tampil_om.php">peserta orientasi dan mobilitas</a>
<br>
<a href ="tampil_braille.php">peserta braille</a>


<?php
echo "<table border='2' >";
echo "<tr>";
echo "<th>nomor</th>";
echo "<th>nama peserta</th>";
echo "<th>materi</th>";
echo "</tr>";
include "koneksi.php";
$tampil=mysqli_query($konek,"select nama_klien,nama_kursus from daftar_klien inner join daftar_kursus on daftar_klien.kode_materi=kode_kursus where kode_materi=8");
$no=1;
while ($r=mysqli_fetch_array($tampil))
{
echo "<tr>";
echo "<td>";
echo $no;
echo "</td>";
echo "<td>";
echo $r['nama_klien'];
echo "</td>";
echo "<td>";
echo $r['nama_kursus'];
echo "</td>";
echo "</tr>";
$no=$no+1;
}
echo "</table>";


?>



</body>
</html>