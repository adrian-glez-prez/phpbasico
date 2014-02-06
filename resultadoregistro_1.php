<?php  
session_start();
require_once 'funcionesregistro.php';
?>
<html>
    <head>
    </head>
    <body>
        <?php
        //asignación de variables---------------------------------------
        $salida=$_REQUEST;
        $login=$_REQUEST['login'];
        $pass1=$_REQUEST['pass1'];
        $pass2=$_REQUEST['pass2'];
        $email=$_REQUEST['email'];   
        $error="";
        //salida de datos----------------------------------------------
        if (validar($login,$pass1,$pass2,$email,$error)){
            echo "<ul>";
            foreach ($salida as $valor) {
                echo "<li>".$valor."</li>";
            }
            echo "</ul>"; 
        } else {
            $_SESSION['errores']=$error;
            $url="formularioregistro_1.php?".$_SERVER['QUERY_STRING'];
            header ('Location:'.$url);
            echo "<ul>";
            echo $error;
            echo "</ul>";
        }
        ?>
    </body>
</html>
