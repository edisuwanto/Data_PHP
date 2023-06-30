
<?php
$x = array ("edi suwanto" 11, 34, "fenna fatharani",23,43, "popon arimansyah", "permana samudara", "saskia putri", "fazil widodo", "bayu pangestu");  //menampilkan data 
echo "<ol>";
for($y = 0;
$y <count($x);
$y = $y+1)
{
echo "<li>";
echo $x[$y];

}
echo "</ol>";
?>