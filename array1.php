<!doctype html>
<html>
<head>
    <title>Array</title>
    <meta charset="UTF-8"/>

</head>
<body>

<?php
$dia[0] = "Domingo";
$dia[1]= "Lunes";
$dia[2] = "Martes";
$dia[3] = "Miercoles";
$dia[4] = "Jueves";
$dia[5] = "Viernes";
$dia[6]= "Sábado";


$mes = array("Enero", "Febrero", "Marzo");
#mostrar el viernes
echo "Día: ".$dia[5];

#imprimir febrero
echo "<br> Mes: ".$mes[1];
?>

<?php
echo "<br>";
$autos = array("Volvo", "BMW", "Toyota");
$arraylongitud = count($autos);
for($x = 0; $x < $arraylongitud; $x++){
    echo $autos[$x];
    echo "<br>";
}
    
?>

</body>
</html>