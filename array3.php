<!doctype html>
<html>
<head>
    <title>Array 3 </title>
    <meta charset="UTF-8"/>

</head>
<body>

<?php
 $productos = array (
    array("Heladera",2500000,18),
    array("Microonda",1500000,9),
    array("Cocina",590000,21),
    array("Licuadora",450000,15),
    array("Mixer",260000,5),
    array("Ventilador",150000,15)
 );

 for($x = 0 ; $x < count($productos); $x++){
    print("<br>".$productos[$x][0]. ", Precio: ".$productos[$x][1]);
 }
 echo "<hr>";
 for($x = 0 ; $x < count($productos);$x++){
    print("<br> Producto $x");
    for($y = 0 ; $y < 3 ; $y++){
        print($productos[$x][$y]. " - ");
    }
 }

 echo "<hr>";
 foreach($productos as $p){
    foreach($p as $item){
        print ($item."|");
    }
 }



?>

</body>
</html>