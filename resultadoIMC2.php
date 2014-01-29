<?php require_once 'funcionesIMC.php';?>
<html>
    <head>
        <title>IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado del IMC</div>
        <?php 
        
        //*Entrada de datos
        $masa = $_REQUEST['masa'];
        $estatura = $_REQUEST['estatura']/100; //*Centímetros a metros
        $IMC= 0.0;
        $clasificacion= "";
       
        
        //errores
        define ("MSG_ERR_PESO","El peso debe ser un valor entero entre las constantes definidas");
        define ("MSG_ERR_ALTURA","La altura debe ser un valor entero entre las constantes definidas");
        $errores[]=array();

       if (!validarPeso($masa)) {
           $errores[]=MSG_ERR_PESO;
       }
       if (!validarAltura($estatura)) {
           $errores[]=MSG_ERR_ALTURA;
       }
       
       if ($errores>0){
           foreach ($errores as $error){
               echo $error. "<br>";
           }
       } else {
        //*Fórmula
        $IMC = calculoIMC ($masa, $estatura);
        $clasificacion = clasificacionIMC($IMC);
        //*Resultados IMC
        
        echo "Valor de IMC = ";
        echo $IMC;
        
        echo "</br>";
        echo "Clasificación = ".$clasificacion;
       }
        ?>
    </body>
</html>