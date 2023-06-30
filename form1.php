<html>
<head>
<title></title>
</head>
<body>
<h1>formulir pendaftaran online</h1> 
<form action="proses1.php" method="post" name="formulir">
nama anda : 
<input type="text" name="nama" title="TuliskanNamaAnda">
<br>
jenis kelamin :
<br>
<input type="radio" name="gender" title="pria"value="laki-laki">laki-laki
<br>
<input type="radio" name="gender" title="wanita" value="perempuan">perempuan
<br>
pilih bulan lahir :
<br>
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
<br>
<input type="checkbox"name="word" value=" paket dasar komputer" title"PaketDasarKomputer>paket dasar komputer
<br>
<input type ="checkbox" name ="language" value ="bahasa inggris" title="BahasaInggris">bahasa inggris
<br>
<input type="checkbox" name ="braille" value="membaca dan menulis huruf braille" title="MembacaDanMenulisHurufBraille">membaca dan menulis huruf braille
<br>
tuliskan mengapa andamemilih belajar di mitra netra 
<br>
<input type="textarea" name="alasan"title="tuliskan anda memilih belajar di mitra netra">


<input type="submit" name="input"value="input">
</form>

</body>
</html>