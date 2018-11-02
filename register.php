<?php
require_once 'autoload.php';
$FormData = new RegisterForm($_POST);
$usuarioDuplicado = false;
$dsn = 'mysql:host=localhost;dbname=ballooncity';
$dbuser = 'root';
$dbpass = '';

if ($_POST) {
	if ($FormData->isValid()) {
		// Sin errores en el formulario
		$name = $FormData->getName();
		$email = $FormData->getEmail();
		$password = $FormData->getPassword();
		try {
			$conexion = new PDO($dsn,$dbuser,$dbpass);
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
		$statementUserCheck = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email');
		$statementUserCheck->execute([':email'=>$FormData->getEmail()]);
		$resultados = $statementUserCheck->fetchAll();
		if (empty($resultados)) {
			$statement = $conexion->prepare('INSERT INTO usuarios (id,name,email,password) VALUES (null, :name, :email, :password)');
			$statement->execute([':name'=>$name,':email'=>$email,':password'=>$password]);
			// header('Location:profile.php');
		} else {
			$usuarioDuplicado = true;
		}
	}
}
require_once 'views/register.view.php';
?>
