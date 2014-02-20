<?php
session_start();
require_once 'funciones_bd.php';
require_once 'validar_software.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//variables
$datos=Array();
$datos[0]=(isset($_REQUEST['titulo']))?
            $_REQUEST['titulo']:"";
$datos[1]=(isset($_REQUEST['url']))?
            $_REQUEST['url']:"";
$errores=Array();
$errores[0]=!validarTitulo($datos[0]);
$errores[1]=!validarUrl($datos[1]);
//variables de sesión
$_SESSION['datos']=$datos;
$_SESSION['errores']=$errores;

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