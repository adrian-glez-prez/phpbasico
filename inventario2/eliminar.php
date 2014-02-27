<?php
session_start();
require_once 'funciones_bd.php';

$_SESSION['id'] = (isset($_REQUEST['id']))?
            $_REQUEST['id']:0;

 $db = conectaBd();   
    $id = $_SESSION['id'];

   
    
    $consulta = "DELETE FROM software 
    WHERE id= :id";
    
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":id" => $id))) {
            $url = "listado_software.php";
            header('Location:'.$url);
    } else {
        print "<p>Error al eliminar el registro.</p>\n";
    }

    $db = null;