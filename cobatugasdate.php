<?php

$hari = date ("D");
if($hari == "Mon")
{
echo "Senin";
}
elseif ($hari == "Tue")
{
echo "Selasa";
}
elseif ($hari== "Wed")
{
echo "Rabu";
}
elseif ($hari == "Thu")
{
echo"Kamis"; 
}
elseif ($hari == "Fri")
{
echo "Jumat";
}
elseif ($hari == "Sat")
{
echo "Sabtu";
}
elseif ($hari == "Sun")
{
echo "Minggu";
}

$tanggal = date ("d");

$bulan = date ("M");
if($bulan == "Jul");
{
echo "Juli";
}

$tahun = date ("Y");
echo ("<br>hari ini : $hari $tanggal $bulan $tahun");

?>