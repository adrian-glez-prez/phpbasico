<?php
session_start();
$login=(isset($_REQUEST['login']))?$_REQUEST['login']:"";
$email=(isset($_REQUEST['email']))?$_REQUEST['login']:""; 
?>
<!DOCTYPE html>
<!--
Esta página recibe login, password y email y los recibirá resultadoregistro.php
el password se pide 2 veces y hay que verificar que sean iguales (y que no está 
vacío). El email puede ir vacío o con una dirección de correo (verificar forma).
El login permite letras y números con longitud mínima y máxima (mismo para el 
password)
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <form action="resultadoregistro_1.php" method="GET">
            Login:<input type="text" name="login" value="<?php echo $login; ?>"/><br>
            Password:<input type="password" name="pass1"/><br>
            Password:(repetir)<input type="password" name="pass2"/><br>
            e-mail:<input type="text" name="email" value="<?php echo $email; ?>"/><br>
            <input type="submit" value="enviar"/>
        </form>
        <?php $error=(isset($_SESSION['errores']))?$_SESSION['errores']:""; 
        if ($error!=""){
            echo $error;
        }?>
    </body>
</html>

