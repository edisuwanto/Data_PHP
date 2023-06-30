<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
Formulir pendaftaran Kursus Yayasan Mitra Netra
</title>
</head>
<body>
<h1>
FORMULIR PENDAFTARAN KURSUS YAYASAN MITRA NETRA
</h1>
<form action="proses_klien.php" method="post">
<table>
<tr>
<td colspan="3">
<input type="hidden" name="nomor">
</td>
</tr>
<tr>
<td>Nama Klien</td>
<td>:</td>
<td>
<input type="text" name="nama" title="Tuliskan Nama Klien">
</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td>
<input type="text" name="alamat" title="Masukkan alamat">
</td>
</tr>
<tr>
<td>Usia</td>
<td>:</td>
<td>
<input type="text" name="usia" title="Umur">
</td>
</tr>
<tr>
<td>Nama Kursus</td>
<td>:</td>
<td>
<select name="kursus" title="Jenis Kursus">
<option value="1">Mengetik 10 Jari</option>
<option value="2">Paket Dasar Komputer</option>
<option value="3">Microsoft Excel</option>
<option value="4">Microsoft PowerPoint</option>
<option value="5">Computer Programming Tingkat Dasar</option>
<option value="6">Music Arranger</option>
<option value="7">Internet Tingkat Lanjut</option>
<option value="8">Jarimatika</option>
<option value="9">Membaca dan Menulis Huruf Braille Latin</option>
<option value="10">Orientasi dan Mobilitas</option>
</select>
</td>
</tr>
</table>
<input type="submit" name="submit" value="kirim">
</form>
</body>
</html>
