<?php
Class GejalaController{

	public function home(){
		$gejalas=Gejala::viewGejala();
		require_once("views/v_AdminGejala.php");
	}

	public function tambahGejala(){
		$gejalas = Gejala::tambahGejala($_POST["gejala"]);
		header("location:index.php?controller=Gejala&action=home&success= Gejala berhasil ditambahkan!");
	}

	public function editGejala(){
		$posts=Gejala::editGejala($_POST["idGejala"],$_POST["gejala"]);
		header("location:index.php?controller=Gejala&action=home&success= Gejala berhasil diubah!");
	}

	public function hapusGejala(){
		$posts=Gejala::hapusGejala($_GET["idGejala"]);
		header("location:index.php?controller=Gejala&action=home&success= Gejala berhasil dihapus!");
	}
}

?>
