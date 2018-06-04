<?php
	class LoginController
	{

		public function home(){
			require_once('views/v_Login.php');
		}

		public function authentication(){
			if(Login::find($_GET['username'],$_GET['password'])==0){
				header("location:?controller=Login&action=home&error= username or password is not available");
			}else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login']=$_GET['username'];
				header("location:index.php?controller=Home&action=homeAdmin&success= You have been signed in successfully!");
			}elseif(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login']=$_GET['username'];
				header("location:index.php?controller=Home&action=home&success= You have been signed in successfully!");
			}

		}

}
?>
