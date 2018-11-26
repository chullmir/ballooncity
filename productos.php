<?php 
require_once 'autoload.php';
$pageTitle = 'Productos';
require_once 'admin/config.php';
require_once 'functions.php';
$conexion = conexion($db_config);
if (!$conexion) {
	echo "Hay errores de conexion a la base de datos";
}
$productos = obtener_productos($conexion,$productos_por_pagina);
if (!$productos) {
	echo "No se cargaron productos";
}






require_once 'views/productos.view.php';
 ?>