<?php
//Primeras Prácticas
$a = 8;
$b = 3;
print("<h3>Operaciones Aritméticas </h3>");
echo "<br> a= $a y b= $b";
echo "<br> Suma:".($a+$b);
echo "<br> Resta:".($a-$b);
echo "<br> División:".($a/$b);
echo "<br> Multiplicación:".($a*$b);
echo "<br> a exponente b es: ".($a**$b);
echo "<br> a resto b es: ".($a%$b);
?>

<?php
$x = 8;
$y = 3;
echo "<h3> Operadores de Comparación. Vacio si es FALSE, 1 ES TRUE </h3>";
echo "x = ".$x.", y = ".$y;
echo "<br>¿X es igual a Y?: ".($x == $y);
echo "<br>¿X es distinto a Y?: ".($x != $y);
echo "<br>¿X es menor a Y?: ".($x < $y);
echo "<br>¿X es mayor a Y?: ".($x > $y);
echo "<br>¿X es mayor o igual a Y?: ".($x >= $y);
echo "<br>¿X es menor o igual a Y?: ".($x <= $y);
?>

<?php
print("<h3>Operadores Lógicos Y, O, Negación</h3>");
echo "A es igual a B y X es mayor a Y:". ($a == $b && $x > $y);
echo "<br>A es igual a B o X es mayor a Y: ". ($a == $b || $x > $y);
echo "<br>Negar (B es igual a X)". (!$b == $x);
?>
