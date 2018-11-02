<?php
require_once 'FormClass.php';
class RegisterForm extends FormClass{
  private $name;
  private $email;
  private $password;
  private $repassword;

  // private $errors;

  function __construct($post){
    $this->name = filter_var(strtolower((isset($post['name']) ? $post['name'] : '')),FILTER_SANITIZE_STRING);
    $this->email = filter_var(strtolower((isset($post['email']) ? $post['email'] : '')),FILTER_SANITIZE_STRING);
    $this->email = (isset($post['email']) ? $post['email'] : '');
    $this->password = (isset($post['password']) ? $post['password'] : '');
    // $this->password = (isset($post['password']) ? hash('sha512,'$post['password']) : '');
    $this->repassword = (isset($post['repassword']) ? $post['repassword'] : '');
    // $this->repassword = (isset($post['repassword']) ? hash('sha512,'$post['repassword']) : '');

    // Comun a los dos formularios
    // $this->errors = [];
  }

  // Comun a los dos formularios
  // public function addError($field,$texto){
  //   $this->errors[$field]=$texto;
  // }
  // public function fieldHasError($field){
  //   return isset($this->errors[$field]);
  // }
  // public function getFieldErrors($field){
  //   return isset($this->errors[$field]) ? $this->errors[$field] : '';
  // }
  // public function getErrors(){
  //   return $this->errors;
  // }



  // Solo Formulario de Registro
  public function isValid(){
    if (empty($this->name)) {
      $this->addError('name','Por favor escribir el nombre');
    }
    if (empty($this->email)) {
      $this->addError('email','Por favor escribir un email');
    } elseif (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
      $this->addError('email','Por favor escribir el email en un formato valido');
    }
    if (empty($this->password)) {
      $this->addError('password','Por favor escribir una contraseña');
    } elseif (empty($this->repassword)) {
      $this->addError('password','Por favor confirme su contraseña');
    } elseif ($this->password != $this->repassword) {
      $this->addError('password','Las contraseñas no coinciden');
    } elseif (strlen($this->password)<3) {
      $this->addError('password','La contraseña no puede tener menos de 3 caracteres.');
    }
    return empty($this->errors);
  }

  // Getters
  public function getName(){
    return $this->name;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }
}

 ?>
