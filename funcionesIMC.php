<?php

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