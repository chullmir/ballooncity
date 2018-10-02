<?php 
abstract class FormValidator{
	private $errors;
	function __construct(){
		$this->errors=[];
	}
}


class RegisterFormValidator extends FormValidator{
	private $nombre;
	private $email;
	private $password;
	private $repassword;
	private $avatar;

	public function __construct($post,$files){
		$this->nombre = isset($post['nombre']) ? $post['nombre'] : '';
		$this->email = isset($post['email']) ? $post['email'] : '';
		$this->password = isset($post['password']) ? $post['password'] : '';
		$this->repassword = isset($post['repassword']) ? $post['repassword'] : '';
		$this->avatar = isset($files['avatar']) ? $files['avatar'] : '';
	}
}

?>