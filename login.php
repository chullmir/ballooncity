<?php
require_once 'autoload.php';
require_once 'functions.php';
$LoginData = new LoginForm($_POST);

if ($_POST) {
  if ($LoginData->isValid()) {
    // No hay errores en la carga del formulario
    $email = $LoginData->getEmail();
    $password = hash('sha512',$LoginData->getPassword());
    $conexion = conexion($db_config);
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email and password = :password');
    $statement->execute([':email'=>$email,':password'=>$password]);
    $resultados = $statement->fetchAll();
    if ($resultados != false) {
      
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $resultados[0]['name'];
      echo "<br>";
      if ($resultados[0]['admin']) {
        $_SESSION['admin']=$email;
      } else {
        $_SESSION['admin']='';
      }
      header('Location:profile.php');
    }

  }
}



require_once 'views/login.view.php';



 ?>
