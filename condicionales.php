<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php

$edad = 21;


#condicional multiple que imprime un texto según la edad
#mejora el código para que los rangos sean MAYOR: 18 a 20 y MENOR 11 a 17
if($edad >= 18 && $edad < 70){
    echo("Eres Mayor De Edad"); 
}else if($edad < 18 && $edad >= 11){
    echo("Eres Menor De Edad"); 
}else{
    echo "Algo Anda Mal :( ";
}


switch($edad){
    case 18:
        echo "<br> Tienes 18";
        break;
    case 15:
        echo "<br> Tienes 15";
        break;
    default:
        echo "<br> No hay nada que celebrar";
}
?>
</body>
</html>