<?php
Class CocokController{

	public function home(){
		$gejalas=Gejala::viewGejala();
		$penyakits=Penyakit::viewPenyakit();
		$cocoks=Cocok::viewCocok();
		require_once("views/v_AdminCocok.php");
	}

	public function tambahCocok(){
		// var_dump($_POST);
		$cocoks = Cocok::tambahCocok($_POST["penyakit"],$_POST["gejala"]);
		header("location:index.php?controller=Cocok&action=home&success= Cocok berhasil ditambahkan!");
	}

	public function hapusCocok(){
		$posts=Cocok::hapusCocok($_GET["idCocok"]);
		header("location:index.php?controller=Cocok&action=home&success= Cocok berhasil dihapus!");
	}
}
?>
