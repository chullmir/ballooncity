<?php 
require_once 'config.php';
// Clases
require_once 'clases/RegisterFormValidator.php';
require_once 'clases/LoginFormValidator.php';
require_once 'clases/Auth.php';
require_once 'clases/DBJson.php';
require_once 'clases/SaveImage.php';
require_once 'clases/User.php';


$auth = new Auth();
$db = new DBJSon('data/users.json');

 ?>