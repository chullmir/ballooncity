<?php
require_once '../functions.php';
$pageTitle = 'Editar Producto';
require_once '../autoload.php';
$conexion = conexion($db_config);
if (!$conexion) {
	header('Location:index.php');
}
if ($_POST) {
	$id = $_POST['id'];
	$codigo = limpiarDatos($_POST['codigo']);
	$nombre = limpiarDatos($_POST['nombre']);
	$stock = limpiarDatos($_POST['stock']);
	$tipo = limpiarDatos($_POST['tipo']);
	$precio = limpiarDatos($_POST['precio']);
	$thumb_guardada = $_POST['thumb-guardada'];
	$thumb = $_FILES['thumb'];
	# Comprobamos que el nombre del thumb no este vacio, si lo esta
	# significa que el usuario no agrego una nueva thumb y entonces utilizamos la thumb anterior.
	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;
	} else {
		// De otra forma cargamos la nueva thumb
		// Direccion final del archivo incluyendo el nombre
		# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
		# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
		$archivo_destino = '../' . $site_config['carpeta_productos'] . $_FILES['thumb']['name'];
		move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_destino);
		$thumb = $_FILES['thumb']['name'];
	}
	$statement = $conexion->prepare('
		UPDATE productos_balloon SET codigo = :codigo, nombre = :nombre, stock = :stock, tipo = :tipo, precio = :precio, thumb = :thumb WHERE ID = :id 
		');
	$statement->execute([
		':codigo'=>$codigo,
		':nombre'=>$nombre,
		':stock'=>$stock,
		':tipo'=>$tipo,
		':coprecio'=>$precio,
		':thumb'=>$thumb
	]);
	header('Location:'.RUTA.'/');

} else {
	$id_producto = id_producto($_GET['id']);
	if (empty($id_producto)) {
		header('Location:index.php');
	}
	$producto = obtener_producto_por_codigo($conexion,$id_producto);
	$producto = $producto[0];
	if (!$producto) {
		header('Location:index.php');
	}


}



require_once '../views/editar.view.php';




?>