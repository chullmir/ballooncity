<?php
require_once 'FormClass.php';
class LoginForm extends FormClass{
  private $email;
  private $password;
  public function __construct($post){
    $this->email = (isset($post['email']) ? $post['email'] : '');
    $this->password = (isset($post['password']) ? $post['password'] : '');
  }
  public function isValid(){
    if (empty($this->email)) {
			$this->addError('email','Por favor escribir una dirección de email');
		} else if (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
			$this->addError('email','Por favor ingrese una dirección de email válida');
		}
		if (empty($this->password)) {
			$this->addError('password','Por favor ingrese una contraseña');
		}
		return empty($this->getErrors());
	}

  // Getters
	public function getEmail(){
		return $this->email;
	}
	public function getPassword(){
		return $this->password;
	}
}

?>
