<?php
require_once 'functions.php';
$pageTitle = 'Producto';
require_once 'autoload.php';
$conexion = conexion($db_config);
// $productos = obtener_productos($conexion,12);
require_once 'partials/head.php';
require_once 'partials/header.php';

require_once 'views/producto.view.php';
?>
