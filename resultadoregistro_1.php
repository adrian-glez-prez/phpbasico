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
        $login=(isset($_REQUEST['login']))?$_REQUEST['login']:"";
        $pass1=(isset($_REQUEST['pass1']))?$_REQUEST['pass1']:"";
        $pass2=(isset($_REQUEST['pass2']))?$_REQUEST['pass2']:"";
        $email=(isset($_REQUEST['email']))?$_REQUEST['login']:""; 
        $error="";
        //salida de datos----------------------------------------------
        if (validar($login,$pass1,$pass2,$email,$error)){
            echo "<ul>";
            foreach ($salida as $valor) {
                echo "<li>".$valor."</li>";
            }
            echo "</ul>"; 
        } else {
            $error="<ul>".$error."<ul>";
            echo $error;
            $_SESSION['errores']=$error;
            $url="formularioregistro_1.php?".$_SERVER['QUERY_STRING'];
            header ('Location:'.$url);
        }
        ?>
    </body>
</html>
