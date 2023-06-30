<html>
<head>
<title></title>
</head>
<body>
<h1>database kursus</h1>

<form action ="proses_kursus.php"method = "post">
<table>
<tr>
<td>no</td>
<td>:</td>
<td>
<input type ="text" name = "nomor" title ="MasukkanNomor">
</td>
</tr>
<tr>
<td>namakursus</td>
<td>:</td>
<td>
<select name="kursus"title="PilihNamaKursus">
<option value ="mengetik sepuluh jari">Mengetik sepuluh jari</option>
<option value ="paket dasar komputer">paket dasar komputer</option>
<option value ="microsoft excel">microsoft excel</option>
<option value ="microsoft power point">microsoft power point</option>
<option value ="komputer prograamming tingkat dasar">komputer programming tingkat dasar</option>
<option value ="internet tingkat lanjut">internet tingkat lanjut</option>
<option value ="musik arranger">musik arranger</option>


</select> 
</td>
</tr>
<tr>
<td>biaya</td>
<td>:</td>
<td>
<input type ="text name ="biaya" title = "masukkan biaya ">
</td>
</tr>
<tr>
<td>nama instruktur</td>
<td>:</td>
<td>
<input type = "text" name ="instruktur" title = "masukkan nama instruktur">
</td>
</tr>
</table>
<input type ="submit" name ="submit" value ="kirim">


</form>

</body>
</html>