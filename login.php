<?php
require_once 'autoload.php';
$LoginData = new LoginForm($_POST);

if ($_POST) {
  if ($LoginData->isValid()) {
    // Carga de formuario correcta
  } else {
    // Hay errores
  }
}



require_once 'views/login.view.php';



 ?>
