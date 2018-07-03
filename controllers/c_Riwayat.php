<?php
Class RiwayatController{

	public function home(){
		$riwayats=RiwayatAnalisa::viewRiwayat();
		require_once("views/v_RiwayatAnalisa.php");
	}


	public function hapusAnalisa(){
		$posts=RiwayatAnalisa::hapusAnalisa($_GET["idAnalisa"]);
		header("location:index.php?controller=Riwayat&action=home&success= Analisa berhasil dihapus!");
	}
}

?>
