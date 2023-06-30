<!DOCTYPE html>
<html>
<head>
<meta charset="UTF">
<title>
Daftar Kursus Yayasan Mitra Netra
</title>
</head>
<body>
<?php
if ($_POST["submit"] == "kirim")
{ 
$no = $_POST["nomor"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$usia = $_POST["usia"];
$kursus = $_POST["kursus"];
include "koneksi.php";
mysqli_query($konek,"insert into daftar_klien(kode_klien,nama_klien,alamat,usia,kode_materi)
values
('$no','$nama','$alamat','$usia','$kursus')");
}
?>
<p>Data telah masuk!</p>
<a href="input_klien.php">Kembali</a>
<br>
<a href ="tampil_klien.php">tampil data masuk</a>
</body>
</html>
