<?php
require_once 'autoload.php';
$LoginData = new LoginForm($_POST);

if ($_POST) {
  if ($LoginData->isValid()) {
    // No hay errores en la carga del formulario
    $email = $LoginData->getEmail();
    $password = hash('sha512',$LoginData->getPassword());
    try {
      $conexion = new PDO($dsn,$dbuser,$dbpass);
    } catch (PDOException $e) {
      echo "Hay errores de Base de Datos";
    }
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email and password = :password');
    $statement->execute([':email'=>$email,':password'=>$password]);
    $resultados = $statement->fetchAll();
    if ($resultados != false) {
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $resultados[0]['name'];
      // echo "Conexion exitosa";
      header('Location:profile.php');
    }

  }
}



require_once 'views/login.view.php';



 ?>
