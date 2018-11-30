<?php
require_once 'autoload.php';
require_once 'functions.php';
$pageTitle = 'Administrar Productos';
$navActive = 'nav-productos';
$conexion = conexion($db_config);
$productos = obtener_productos($conexion,$site_config['productos_por_pagina']);


require_once 'views/catalogo.view.php';
?>