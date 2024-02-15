Bienvenidos Aquí!
<?php
/* varias
lineas*/
#una sola linea
//una sola linea
#declarar variables
$nombre = "Fer";
$edad = "21";
$num1 = "50";
$num2 = "25";

print("<h1>Hola $nombre </h1>");

echo "Bueno, ".$nombre." Tu edad es ". $edad;

echo "<br> Suma: ".$num1 + $num2;
echo "<br> Resta: ".$num1 - $num2;
echo "<br> Multiplicación: ".$num1 * $num2;
echo "<br> División: ".$num1 / $num2;
echo "<br> Modulo: ".$num1 % $num2;
echo "<br> Mayor que: ".($num1 > $num2); #true
echo "<br> Menor que: ".($num1 < $num2); #false
echo "<br> Mayor o Igual: ".($num1 >= $num2);
echo "<br> Iguales: ".($num1 == $num2);
echo "<br> Distintos: ".($num1 != $num2);
?>
