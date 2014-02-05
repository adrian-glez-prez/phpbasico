<?php
/*-----------constantes-----------------*/
//constantes para la longitud de nombre y passwd
define ("longmax", "11"); 
define ("longmin", "3");
/*-----------funciones unificadas-----------------*/
//función unificadora
function validar($login,$pass1,$pass2,$email,&$error) {
    $resultado=true;
    $resultado=validapasswd($pass1,$pass2,$error) && $resultado;
    $resultado=validalogin($login,$error) && $resultado;
    $resultado=validaemail($email,$error) && $resultado;
    return $resultado;
}
//función unificadora passwd
function validapasswd ($cadena1,$cadena2,&$error) {
    $resultado=false;
    if (!tieneAlfaNum($cadena1)) {
        $error.="<li> la contraseña no tiene números o no tiene letras</li>";
    }
    if (!enRango($cadena1)) {
        $error.="<li> la contraseña es demasiado corta o demasiado larga (3-10) o no existe</li>";
    }
    if (!esAlfaNum($cadena1)){
        $error.="<li> la contraseña tiene caracteres que no son alfanumericos</li>";
    }
    if (!sonIguales($cadena1,$cadena2)) {
        $error.="<li> las contraseñas no coinciden</li>";
    } 
    if (enRango($cadena1) && esAlfaNum($cadena1) && sonIguales($cadena1,$cadena2) && tieneAlfaNum($cadena1)) {
        $resultado=true;
    }
    return $resultado;
}
//función unificadora login
function validalogin ($cadena, &$error){
    $resultado=false;
    if (!enRango($cadena)) {
        $error.="<li> el login es demasiado corto o demasiado largo (3-10) o no existe</li>";
    } 
    if (!esAlfaNum($cadena)) {
        $error.="<li> el login tiene caracteres que no son alfanuméricos</li>";
    } 
    if (enRango($cadena) && esAlfaNum($cadena)) {
        $resultado=true;
    }
    return $resultado;
}
//función unificadora de email
function validaemail ($cadena,&$error) {
    $resultado=false;
    if (!esEmail($cadena) && ($cadena=="")) {
        $error.="<li> el correo electrónico debe tener estructura de email</li>";
    } else {
        $resultado=true;
    }
    return $resultado;
}
/*------------------funciones de comprobación-----------------------------*/
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

/*-----------------------------EXPERIMENTO------------------------------------*/
function tieneAlfaNum ($cadena){
    $resultado=false;
    $resultadoalf=false;
    $resultadonum=false;
    for ($c=0;$c<strlen($cadena);$c++){
        $resultadoalf=$resultadoalf || ctype_alpha($cadena[$c]);
        $resultadonum=$resultadonum || ctype_digit($cadena[$c]); 
    }
    $resultado= $resultadoalf && $resultadonum;
    return $resultado;
}
?>
