<?php

echo "<table>";
echo "<tr>";
echo "<td>";
if(isset($_POST['input']))
{
echo "nama anda : ";
echo $_POST['nama'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";

echo "jenis kelamin :";
echo $_POST["gender"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "anda lahir pada bulan : ";
echo $_POST["bulan"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "kursus yang di ikuti : ";
if(isset($_POST['word']))
{
echo $_POST['word'];
echo "<br>";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
if(isset($_POST['language']))
{
echo $_POST['language'];
echo "<br>";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
if(isset($_POST['braille']))
{
echo $_POST['braille'];
echo "<br>";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "alasan mengikuti kursus";
echo $_POST['alasan'];
}

echo "</td>";
echo "</tr>";
echo "</table>";
?>