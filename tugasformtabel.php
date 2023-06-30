<html>
<head>
<title></title>
</head>
<body>

<form action="proses1.php" method="post" name="formulir">

<table border="3">

<tr>
<td>nama anda :</td>
<td><input type="text" name="nama" title="TuliskanNamaAnda"></td>

</tr>
<tr>
<td>jenis kelamin :</td>

<td><input type="radio" name="gender" title="pria"value="laki-laki">laki-laki</td>

<td><input type="radio" name="gender" title="wanita" value="perempuan">perempuan</td>

</tr>
<tr>
<td>pilih bulan lahir :</td>
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
</table>


<input type="submit" name="input"value="input">
</form>

</body>
</html>