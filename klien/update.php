<!doctype html>
<html>
<head>
<meta charset="UTF">
<title>Kursus Komputer Bicara Yayasan Mitra Netra</title>
</head>
<body>
<?php
include 'koneksi.php';
$_POST['submit'];
$noid = $_POST['noid'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$kursus = $_POST['kode_kursus'];
mysqli_query($konek,"UPDATE daftar_klien SET nama_klien='$nama',alamat='$alamat',usia='$usia',kode_materi='$kursus' WHERE kode_klien='$noid'");
?>
</body>
</html>
