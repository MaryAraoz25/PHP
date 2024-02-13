<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php



#imprimir una tabla de multiplicar con for()
//luego mejorar para imprimir todas las tablas del 1 al 10
for ($x = 0 ; $x <= 10 ; $x++){
    echo "<br> 9 x $x = ". (9*$x)."<br>";
}
echo "<hr>";
for ($x = 1 ; $x <= 10 ; $x++){
    for ($y = 0 ; $y <= 10 ; $y++){
        echo "<br> $x x $y = ". ($x*$y)."<br>";
        
    }
    echo "<hr>";
}
?>
</body>
</html>