<?php
if(isset($_POST['input']))
{
echo "nama anda : ";
echo $_POST['nama'];
echo "<br>";
echo "jenis kelamin : ";
echo $_POST["gender"];
echo "<br>";
echo "anda lahir pada bulan : ";
echo $_POST["bulan"];
echo "<br>";
if(isset($_POST['word']))
{
echo $_POST['word'];
echo "<br>";
}
if(isset($_POST['language']))
{
echo $_POST['language'];
echo "<br>";
}
if(isset($_POST['braille']))
{
echo $_POST['braille'];
echo "<br>";
}
echo "<br>";
echo $_POST['alasan'];
}




?>