<!doctype html>
<html>
<head>
    <title>Temperatura</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//A parte de for(), existe el while(): ciclo mientras
$temperatura = 0;
/*A diferencia del for(), el while() 
requiere indicar el contador o sumador*/
// mientras más proximo al valor 100 pintar en un tono rojo más fuerte
while($temperatura <= 100){
    echo " La Temperatura es:  $temperatura <br>";
    $temperatura++;
}
?>
</body>
</html>