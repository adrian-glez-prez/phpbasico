<?php require_once 'resultadoIMC_2.php'?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cálculo IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Cálculo IMC</div>
        <form action="resultadoIMC_2.php" method="GET">
            <p>Peso: <input type="text" name="peso" /> Kgs</p>
            <?php
                if (isset ($_REQUEST['error_peso'])) {
                    echo MSG_ERR_PESO;
                }
            ?>
            <p>Estatura <input type="text" name="estatura" /> Cms</p>
            <?php
                if (isset($_REQUEST['error_altura'])) {
                    echo MSG_ERR_ALTURA;
                }
            ?>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>


