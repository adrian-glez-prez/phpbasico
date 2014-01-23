<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
            //entrada de datos
            $nombre="";
            if (isset($_REQUEST['nombre'])){
                $nombre=$_REQUEST['nombre'];
            }
            $edad=$_REQUEST['edad']; 
            //comprobaciones de datos
            $error=false;
            $mensaje_error='ERROR: ';
            //validar edad
            if (!is_numeric($edad)){
                $error=true;
                $mensaje_error.='Edad debe ser un número. ';
            } else if ($edad<=0||$edad>=100) {
                $error=true;
                $mensaje_error.='Edad debe ser un número entre 1 y 100. ';
            }
            //validar nombre
            if ($nombre==""){
                $error=true;
                $mensaje_error.='El nombre no puede estar en blanco. ';
            }
            //operaciones
            if (!$error) {
                 echo('Hola. '.$nombre.' es ');
                if ($edad>=18) {
                    echo('mayor de edad');
                } else {
                    echo('menor de edad');
                }
            } else {
                echo $mensaje_error;
                echo "<a href='javascript:history.go(-1);'>volver al formulario</a>";
            }
           
        ?>
    </body>
</html>