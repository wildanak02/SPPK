<?php
Class RegisterController{

	public function home(){
		require_once("views/v_Register.php");
	}

	public function register(){
		$getusr= Register::getUsername($_POST["username"]);
		$getpwd=strlen($_POST["password"]);
		if ($getusr==true){
			header("location:index.php?controller=Register&action=home&error= Username already exist!");
		}
		else{
			if ($getpwd>8){
				header("location:index.php?controller=Register&action=home&error= Password must be 1 to 8 characters !");
			}
			else{
				$register = Register::register($_POST["username"],$_POST["nama"],$_POST["password"]);
				header("location:index.php?controller=Login&action=home&success= You have been signed up successfully!");
			}
		}
	}


}

?>
