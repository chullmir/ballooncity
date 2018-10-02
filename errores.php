<?php
	$hola = 'Hola capo';
	class ValidatorRegisterForm{
		private $nombre;
		private $email;
		private $password;
		private $repassword;
		private $avatar;
		//FormValidator
		private $errors;

		//FormValidator
		public function cargarError($campo,$texto){
			$this->errors[$campo]=$texto;
		}

		public function __construct($post,$file){
			$this->nombre = isset($post['nombre']) ? $post['nombre'] : '';
			$this->email = isset($post['email']) ? $post['email'] : '';
			$this->password = isset($post['password']) ? $post['password'] : '';
			$this->repassword = isset($post['repassword']) ? $post['repassword'] : '';
			$this->avatar = isset($files['avatar']) ? $files['avatar'] : '';
			//FormValidator
			$this->errors = [];
		}

		public function esValido(){
			if ($this->nombre == '') {
				$this->cargarError('nombre','Por favor escribir el nombre');
			}
			if (empty($this->email)) {
				$this->cargarError('email','Por favor escribir un email');
			} elseif (!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
				$this->cargarError('email','Por favor escribir el email en un formato valido');
			}
			if (empty($this->password)) {
				$this->cargarError('password','Por favor escribir una contraseña');
			} elseif (empty($this->repassword)) {
				$this->cargarError('password','Por favor confirme su contraseña');
			} elseif ($this->password != $this->repassword) {
				$this->cargarError('password','Las contraseñas no coinciden');
			} elseif (strlen($this->password)<8) {
				$this->cargarError('password','La contraseña no puede tener menos de 8 caracteres.');
			}
			// if ($this->avatar['error'] !== UPLOAD_ERR_OK) {
			// 	$this->cargarError('avatar','Por favor, cargar una imagen.');
			// } else {
			// 	$ext = pathinfo($this->avatar['name'],PATHINFO_EXTENSION);
			// 	if (!in_array($ext, ALLOWED_IMAGE_TYPES)) {
			// 		addError('avatar','Formato de imagen no es valido.');
			// 	}
			// }
			return empty($this->errors);
			return "Hola";
		}

		public function getName(){
			return $this->nombre;
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