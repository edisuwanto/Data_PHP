<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
Daftar Kursus Yayasan Mitra Netra
</title>
</head>
<body>

<?php
if ($_POST["submit"] == "kirim")
{ 
$no = $_POST["nomor"];
$kursus = $_POST["kursus"];
$biaya = $_POST["biaya"];
$instruktur = $_POST["instruktur"];

include "koneksi.php";

mysqli_query($konek,"insert into daftar_kursus(kode_kursus,nama_kursus,biaya_kursus,nama_instruktur)
values
('$no','$kursus','$biaya','$instruktur')");
}
?>

<p>Data telah masuk!</p>
<a href="input_kursus.php">Kembali</a>
<br>
<a href ="tampil_kursus.php">tampil data kursus</a>
</body>
</html>
