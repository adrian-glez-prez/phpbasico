<?php
session_start();
require_once 'funciones_bd.php';

$bd = conectaBd();
$consulta = "DELETE * FROM software WHERE id=".$_SESSION['id'];
$resultado = $bd->query($consulta);

if (!$resultado) {
       $url = "error.php?msg_error=Error_Consulta_Editar";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Registro_Software_inexistente";
           header('Location:'.$url);
       } else {
           $_SESSION['datos'][0] = $registro['titulo'];
           $_SESSION['datos'][1] = $registro['url'];
       }
}