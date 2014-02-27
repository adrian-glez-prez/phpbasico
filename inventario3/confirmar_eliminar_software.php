<?php 
session_start();

$_SESSION['id'] = (isset($_REQUEST['id']))?
            $_REQUEST['id']:0;
?>
<html>
    <head>
        <title>Eliminar Software</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Eliminar Software</div>
           <?php
           if ($_SESSION['id']==0) {
               echo "No hay ningún campo seleccionado";
           } else {
           echo "¿Está seguro de que quiere eliminar este registro?";
           echo "<div><a href=eliminar.php?id=".$_SESSION['id'].">sí, elimínalo</a></div>";
           echo "<div><a href=listado_software.php>no, regreso al listado</a></div>";
           }
           ?>
        
    </body>
</html>