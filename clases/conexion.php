<?php 
try {
	$conexion = new PDO($dsn,$dbuser,$dbpass);
	$statement=$conexion->prepare('SELECT * FROM usuarios WHERE email = :email');
	$statement->execute([':email'=>$_SESSION['email']]);
	$resultados = $statement->fetch();
	$_SESSION['name']=$resultados['name'];
} catch (PDOException $e) {	}

 ?>