<?php require_once 'funcionesregistro.php'; ?>
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
        //errores---------------------------------------------
        //nombre demasiado corto/largo
        /*
        if (!enRango($login)){
            $error.="<li> el nombre es demasiado corto o demasiado largo (3-10) o no existe</li>";
        }
        //nombre alfanumérico
        if (!esAlfaNum($login)){
            $error.="<li> el nombre debe estar compuesto por caracteres alfanuméricos</li>";
        }
        //contraseña demasiado corta/larga
        if (!enRango($pass1)){
            $error.="<li> la contraseña es demasiado corta o demasiado larga (3-10) o no existe</li>";
        }
        //contraseña alfanumerica
        if (!esAlfaNum($pass1)) {
            $error.="<li> la contraseña debe estar compuesta por caracteres alfanuméricos</li>";
        }
        //contraseñas diferentes
        if (!sonIguales($pass1,$pass2)){
            $error.="<li> las contraseñas deben ser iguales </li>";
        }
        //comprobación de correo
        if (isset($email)&&!esEmail($email)){
            $error.="<li> el correo electrónico debe tener estructura de email </li>";
            
        }
        */
        //salida de datos----------------------------------------------
        if (validar($login,$pass1,$pass2,$email,$error)){
            echo "<ul>";
            foreach ($salida as $valor) {
                echo "<li>".$valor."</li>";
            }
            echo "</ul>"; 
        } else {
            echo "<ul>";
            echo $error;
            echo "</ul>";
        }
        ?>
    </body>
</html>
