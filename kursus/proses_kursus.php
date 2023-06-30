<html>
<head>
<title></title>
</head>
<body>
<?php
if($_POST["submit"] =="kirim")
{
$no= $_POST["nomor"];
$kursus=$_POST["kursus"];
$biaya=$_POST["biaya"];
$instruktur=$_POST["instruktur"];

include "koneksi.php";
mysqli_query($konek,"insert into daftar_kursus(kode_kursus,nama_kursus,biaya_kursus,nama_instruktur)
values
('$no','$kursus','$biaya','$instruktur')");
}




?>



</body>
</html>