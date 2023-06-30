<html>
<head>
<title></title>
</head>
<body>
<h1>formulir pendaftaran online</h1> 

<form action="prosesform.php" method="post" name="formulir">
<table>
<tr>
<td>nama anda</td>
<td>:</td>
<td>
<input type="text" name="nama" title="TuliskanNamaAnda">
</td>
</tr>
<tr>
<td>jenis kelamin</td>
<td>:</td>
<td>
<input type="radio" name="gender" title="pria"value="laki-laki">laki-laki
<br>


<input type="radio" name="gender" title="wanita" value="perempuan">perempuan
</td>
</tr>
<tr>
<td>pilih bulan lahir</td>
<td>:</td>
<td>
<select name="bulan" title ="pilih bulan lahir anda">
<option value="Januari">Januari</option>
<option value="Februari">Februari</option>
<option value="Maret">Maret</option>
<option value="April">April</option>
<option value="Mei">Mei</option>
<option value="Juni">Juni</option>
<option value="Juli">Juli</option>
<option value="Agustus">Agustus</option>
<option value="September">September</option>
<option value="Oktober">Oktober</option>
<option value="November">November</option>
<option value="Desember">Desember</option>

</select>
</td>
</tr>
<tr>
<td>kursus yang di ikuti</td>
<td>:</td>
<td>
<input type="checkbox"name="word" value=" paket dasar komputer" title"PaketDasarKomputer>paket dasar komputer
<br>
<input type ="checkbox" name ="language" value ="bahasa inggris" title="BahasaInggris">bahasa inggris
<br>
<input type="checkbox" name ="braille" value="membaca dan menulis huruf braille" title="MembacaDanMenulisHurufBraille">membaca dan menulis huruf braille
</td>
</tr>
<tr>
<td>tuliskan mengapa andamemilih belajar di mitra netra</td> 
<td>:</td>
<td>
<input type="textarea" name="alasan"title="tuliskan anda memilih belajar di mitra netra">
</td>
</tr>
</table>
<input type="submit" name="input"value="input">
</form>

</body>
</html>