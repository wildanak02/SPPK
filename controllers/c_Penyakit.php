<?php
Class PenyakitController{

	public function home(){
		$penyakits=Penyakit::viewPenyakit();
		require_once("views/v_AdminPenyakit.php");
	}

	public function tambahPenyakit(){
		$penyakits = Penyakit::tambahPenyakit($_POST["penyakit"],$_POST["solusi"]);
		header("location:index.php?controller=Penyakit&action=home&success= Penyakit berhasil ditambahkan!");
	}

	public function editPenyakit(){
		$posts=Penyakit::editPenyakit($_POST["idPenyakit"],$_POST["penyakit"],$_POST["solusi"]);
		header("location:index.php?controller=Penyakit&action=home&success= Penyakit berhasil diubah!");
	}

	public function hapusPenyakit(){
		$posts=Penyakit::hapusPenyakit($_GET["idPenyakit"]);
		$posts2=Penyakit::reset();
		header("location:index.php?controller=Penyakit&action=home&success= Penyakit berhasil dihapus!");
	}
}

?>
