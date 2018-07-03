<?php
class ProfileController
{

	public function home(){
    $users=User::viewUser();
		require_once('views/v_Profile.php');
	}

  public function editUser(){
		$posts=User::editUser($_GET["idUser"],$_GET["nama"],$_GET["username"],$_GET["password"]);
		header("location:index.php?controller=Profile&action=home&success= Data user berhasil diubah!");
	}


}
?>
