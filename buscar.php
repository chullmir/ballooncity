<?php
require_once 'functions.php';
require_once 'config.php';

if ($_GET && !empty($_GET['busqueda'])) {
  echo "Cool";
} else {
  header('Location:index.php');
}



require_once 'partials/head.php';
require_once 'partials/header.php';
require_once 'views/buscar.view.php';
require_once 'partials/footer.php';



 ?>
