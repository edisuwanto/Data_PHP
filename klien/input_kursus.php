<!DOCTYPE html>
<html>
<head>
<meta charset="UTF.8">
<title>
Formulir Daftar Kursus Yayasan Mitra Netra
</title>
</head>
<body>
<h1>
FORMULIR DAFTAR KURSUS YAYASAN MITRA NETRA
</h1>

<form action="proses_kursus.php" method="post">
<table>
<tr>
<td>Nomor</td>
<td>:</td>
<td>
<input type="text" name="nomor" title="Masukkan Nomor Kursus">
</td>
</tr>
<tr>
<td>Nama Kursus</td>
<td>:</td>
<td>
<select name="kursus" title="Jenis Kursus">
<option value="Mengetik 10 Jari">Mengetik 10 Jari</option>
<option value="Paket Dasar Komputer">Paket Dasar Komputer</option>
<option value="Microsoft Excel">Microsoft Excel</option>
<option value="Microsoft PowerPoint">Microsoft PowerPoint</option>
<option value="Computer Programming Tingkat Dasar">Computer Programming Tingkat Dasar</option>
<option value="Music Arranger">Music Arranger</option>
<option value="Internet Tingkat Lanjut">Internet Tingkat Lanjut</option>
<option value="Jarimatika">Jarimatika</option>
<option value="Membaca dan Menulis Huruf Braille Latin">Membaca dan Menulis Huruf Braille Latin</option>
<option value="Orientasi dan Mobilitas">Orientasi dan Mobilitas</option>
</select>
</td>
</tr>
<tr>
<td>Biaya</td>
<td>:</td>
<td>
<input type="text" name="biaya" title="Masukkan Biaya">
</td>
</tr>
<tr>
<td>Nama Instruktur</td>
<td>:</td>
<td>
<input type="text" name="instruktur" title="Masukkan Nama Instruktur">
</td>
</tr>
</table>
<input type="submit" name="submit" value="kirim">
</form>
</body>
</html>
