<!doctype html>
<html>
<head>
    <title>Array 2 </title>
    <meta charset="UTF-8"/>

</head>
<body>

<?php
 $edades= array("Moises" => "33" , "Camila" => "25", "Samanta" => "17");
 echo "Camila Tiene: ". $edades['Camila']. " Años.";

 foreach($edades as $x => $valor){
    echo "Clave= " . $x . ", valor = " . $valor;
    echo "<br>";
 }
?>

</body>
</html>