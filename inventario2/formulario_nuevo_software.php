<?php
session_start();
require_once 'validar_software.php';
$_SESSION['datos']=(isset($_SESSION['datos']))?
            $_SESSION['datos']:Array('','');
$_SESSION['errores']=(isset($_SESSION['errores']))?
            $_SESSION['errores']:Array(FALSE, FALSE);

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <form action="grabar_nuevo_software.php" method="GET">
            <p>Titulo: <input type="text" name="titulo" value="<?php echo $_SESSION['datos'][0]?>"/></p>
            <?php if ($_SESSION['errores'][0]) {
                echo "El título no es correcto";
            }?>
            <p>Url: <input type="text" name="url"  value="<?php echo $_SESSION['datos'][1]?>"/></p>
            <?php if ($_SESSION['errores'][1]) {
                echo "La URL no es correcta";
            }?>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>