<?php
date_default_timezone_set('Asia/Jakarta');  //untuk menampilkan jam yang ada dinkomputer kita

$hari = date ("l"); // fungsi date dengan paarameter l, menampilkan nama hari lengkap dalam bahasa inggris;
echo $hari;
$day =date  ("D"); //menampilkan nama hari dari 3 huruf pertama
echo "<br>";
echo  $day;
$x = date ("t");
echo "<br>";
echo $x;

$hari = date ("g-i-s");
echo "<br>";
echo $hari;

$tanggal =date  ("d/M/Y");
echo "<br>";
echo $tanggal;
?>