<?php
/*-----------constantes-----------------*/
//constantes para la longitud de nombre y passwd
define ("longmax", "11"); 
define ("longmin", "3");
/*-----------funciones-----------------*/
//función para comprobar longitud
function enRango ($cadena) {
   $resultado=false;
   if (strlen ($cadena)>=longmin && strlen($cadena)<longmax){
       $resultado=true;
   }
   return $resultado;
}
//función para comprobar si una cadena es alfanumérica
function esAlfaNum ($cadena){
    $resultado=false;
    if (ctype_alnum($cadena)){
        $resultado=true;
    }
    return $resultado;
}
//función para comprobar si dos cadenas son iguales
function sonIguales ($cadena1,$cadena2){
    $resultado=false;
    if ($cadena1==$cadena2) {
        $resultado=true;
    }
    return $resultado;
}
//función para comprobar si un email tiene la estructura correcta
function esEmail ($cadena){
    $resultado=false;
    if (filter_var($cadena, FILTER_VALIDATE_EMAIL)){
        $resultado=true;
    }
    return $resultado;
}
?>
