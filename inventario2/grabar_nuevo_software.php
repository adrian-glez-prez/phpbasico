<?php
require_once 'funciones_bd.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$datos=Array();
$datos[0]=$_REQUEST['titulo'];
$datos[1]=$_REQUEST['url'];



$db = conectaBd();


$consulta = "INSERT INTO software 
    (titulo, url)
    VALUES (:titulo, :url)";
$resultado = $db->prepare($consulta);
if ($resultado->execute(array(":titulo" => $datos[0], ":url" => $datos[1]))) {
    print "<p>Registro creado correctamente.</p>\n";
    $url="listado_software.php";
    header ('Location:'.$url);
} else {
    print "<p>Error al crear el registro.</p>\n";
}

$db = null;



?>