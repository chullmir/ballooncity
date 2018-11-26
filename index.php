<?php
require_once 'functions.php';
$pageTitle = 'Balloon City';
require_once 'autoload.php';
$conexion = conexion($db_config);
$productos = obtener_productos($conexion,$site_config['productos_por_pagina']);
require_once 'partials/head.php';
require_once 'partials/header.php';

require_once 'views/index.view.php';
require_once 'partials/footer.php';
?>
