<?php

//validación de datos
/*Validación de peso
 * a partir del peso comprueba que sea un número entre 1 y 100 y devuelve true 
 * si es válido y false en caso contrario
 */
define ("pesomin","1");
define ("pesomax","100");
function enPeso ($peso){
    return ($peso>=pesomin)&&($peso<pesomax);
}
function validarPeso($peso){
     return enPeso($peso)&& ctype_digit($peso);
}

/*Validación de altura
 * 
 */
define ("alturamin","20");
define ("alturamax","200");
function enAltura ($altura){
    return ($altura>=alturamin)&&($altura<alturamax);
}
function validarAltura($estatura) {
    if (filter_var($peso,FILTER_VALIDATE_INT)) {
        $resultado = enPeso($estatura);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
}
/**Calcula el valor IMC
 *$param masa expresada en kilos [0-500]
 *$param estatura expresada en centímetros [0-300]
 *$return float resultado del cálculo IMC redondeado a dos decimales
 *$link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal 
 */

function calculoIMC ($masa, $estatura) {
   $estatura = $_REQUEST['estatura']/100; //*Centímetros a metros
   $IMC = ($masa / ($estatura*$estatura));
   return round ($IMC, 2); //*Con "round" lo que hacemos es indicarle después que nos de el IMC con una aproximación de 2 cifras
}

/**
 * Clasficación IMC
 * Calcula la clasificación...
 * $param IMC Valor válido de IMC
 * $return string Contiene clasificación según valor
 * $link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal 
 */
 
function clasificacionIMC ($IMC) {
    if ($IMC <18.5){
            $clasificacion = "Bajo peso";
        }
            elseif ($IMC>18.5 &&  $IMC<24.99){
             $clasificacion = "Normal";
         }
            elseif ($IMC>=25 && $IMC<=29.99){
             $clasificacion = "Sobrepeso";
        }
            elseif ($IMC>=30){
             $clasificacion = "Obesidad";
        }
        return $clasificacion;
}

?>