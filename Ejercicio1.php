<?php
$Edad = 21;
#condicionales 
$llueve = "no";
$es_feriado = "no";
$es_finde = "no";

if($llueve == "si" || $es_feriado == "si" || $es_finde == "si"){
    print("Me quedo en casa");

}else{
    print("Me voy al SNPP");
}
print("<hr>");

$llueve2 = 1;
$es_feriado2 = null;
$es_finde2 = null;

if($llueve2  || $es_feriado2  || $es_finde2 ){
    print("Me quedo en casa 2.0");
}else{
    print("Me voy al SNPP 2.0");
}


?>