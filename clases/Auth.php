<?php
	class Auth
	{
		public function __construct()
		{
			session_start();
			if( isset($_COOKIE['rememberUser']) && !$this->isLoged() ) {
				$this->login($_COOKIE['rememberUser']);
			}
		}
		public function logIn($userEmail)
		{
			$_SESSION['userEmail'] = $userEmail;
			header('location: profile.php');
			exit;
		}
		public function isLogged() {
			return isset($_SESSION['userEmail']);
		}
	}
?>