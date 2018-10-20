<?php
	require_once 'FormValidator.php';
	class RegisterFormValidator extends FormValidator
	{
		private $name;
		private $email;
		private $password;
		private $repassword;
		private $avatar;

		public function __construct($post,$files)
		{
			$this->name = (isset($post['name']) ? $post['name'] : '');
			$this->email = (isset($post['email']) ? $post['email'] : '');
			$this->password = (isset($post['password']) ? $post['password'] : '');
			$this->repassword = (isset($post['repassword']) ? $post['repassword'] : '');
			$this->avatar = isset($files['avatar']) ?  $files['avatar'] : '';
		}

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
			if ($this->avatar['error'] != UPLOAD_ERR_OK) {
				$this->addError('avatar','Por favor, cargar una imagen.');
			} else {
				$ext = pathinfo($this->avatar['name'],PATHINFO_EXTENSION);
				if (!in_array($ext, ['jpg', 'png', 'jpeg', 'gif', 'svg'])) {
					$this->addError('avatar','Cargar una imagen del formato válido');
				}
			}
			return empty($this->errors);
		}

		public function getName(){
			return $this->name;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function getImage(){
			return $this->image;
		}

	}





 ?>
