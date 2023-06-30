<!doctype html>
<html>
<head>
<meta charset="UTF">
<title>Kursus Komputer Bicara Yayasan Mitra Netra</title>
</head>
<body>
<?php
include 'koneksi.php';
$noid = $_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM daftar_klien WHERE kode_klien='$noid'");
$r = mysqli_fetch_array($query);
?>
<h2>Edit Peserta Kursus</h2>
<form method="POST" action="update.php">
<input type="hidden" name="noid" value="<?php echo $r['kode_klien'];?>">
<table>
<tr>
<td>Nama Lengkap</td> 
<td>:</td>
<td>
<input type="text" name="nama" value="<?php echo $r['nama_klien'];?>">
</td>
</tr>
<tr>
<td>alamat</td> 
<td>:</td>
<td>
<input type="text" name="alamat" value="<?php echo $r['alamat'];?>">
</td>
</tr>
<tr>
<td>Usia</td> 
<td>:</td>
<td>
<input type="text" name="usia" value="<?php echo $r['usia'];?>">
</td>
</tr>
<tr>
<td>kode materi</td> 
<td>:</td>
<td>
<input type="text" name="kode_kursus" value="<?php echo $r['kode_materi'];?>">
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type="submit" name="submit" value="Update">
<input type="button" value="Batal" onclick="self.history.back()">
</td>
</tr>
</table>
</form>
</body>
</html>
