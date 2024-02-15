<!doctype html>
<html>
<head>
    <title>Array</title>
    <meta charset="UTF-8"/>

</head>
<body>

<?php

$dia[0]= "Lunes";
$dia[1] = "Martes";
$dia[2] = "Miercoles";
$dia[3] = "Jueves";
$dia[4] = "Viernes";
$dia[5]= "Sábado";
$dia[6] = "Domingo";

$hoy = date("N") - 1;
print ("El valor de hoy es: ".$hoy);
print ("<br> Hoy es: ". $dia[$hoy]);
print("<h4> Los días son </h4>");

for($x = 0 ; $x < count($dia) ; $x++){
    if($x == $hoy){
        print("<button>".$dia[$x]."</button><br>");
      
    }else{
        print($dia[$x]."<br>");
    }
    
}

?>

</body>
</html>