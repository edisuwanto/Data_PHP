<!doctype html>
<html>
<head>
<meta charset=:UTF-8">
<title>
Kursus Komputer Bicara Yayasan Mitra Netra
</title>
</head>
<body>

<?php
echo "<h2>Data Peserta Kursus</h2>
<table>
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Alamat</th>
<th>Usia</th>
<th>Kode Materi</th>
<th>Aksi</th>
</tr>";
include "koneksi.php";
$tampil=mysqli_query($konek,"SELECT * FROM daftar_klien ORDER BY kode_klien");
$no=1;
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr>";
echo "<td>";
echo $no;
echo "</td>";
echo "<td>";
echo $r['nama_klien'];
echo "</td>";
echo "<td>";
echo $r['alamat'];
echo "</td>";
echo "<td>";
echo $r['usia'];
echo "</td>";
echo "<td>";
echo $r['kode_materi'];
echo "</td>";
echo "<td>";
echo "<a href=edit_klien.php?id=$r[kode_klien]>Edit</a>";
echo "</tr>";
  $no++;
}
echo "</table>";
?>
<a href ="input_klien.php"> kembali masukkan data</a>
</body>
</html>
