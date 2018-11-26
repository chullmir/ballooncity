<?php
function conexion($bd_config){
  try {
    $conexion = new PDO($bd_config['dsn'],$bd_config['dbuser'],$bd_config['dbpass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}
function pagina_actual(){
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}
function obtener_productos($conexion,$productos_por_pagina){
  $inicio = (pagina_actual()>1) ? ($productos_por_pagina * (pagina_actual() - 1) ) : 0;
  $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos_balloon LIMIT {$inicio},{$productos_por_pagina}");
  $sentencia->execute();
  return $sentencia->fetchAll();
}
function numero_paginas($productos_por_pagina,$conexion){
  $total_productos = $conexion->prepare("SELECT FOUND_ROWS() as total");
  $total_productos->execute();
  $total_productos = $total_productos->fetch()['total'];
  $numero_paginas = ceil($total_productos/$productos_por_pagina);
  return $numero_paginas;
}
function id_producto($id){
  return (int)limpiarDatos($id);
}
function obtener_producto_por_codigo($conexion,$codigo){
  $resultado = $conexion->query("SELECT * FROM productos_balloon WHERE codigo = $codigo LIMIT 1");
  $resultado = $resultado->fetchAll();
  return ($resultado) ? $resultado : false;
}
function comprobarSession(){
  if (!isset($_SESSION['admin'])) {
    header('Location:'.RUTA);
  }
}



?>
