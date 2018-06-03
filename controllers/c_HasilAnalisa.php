<?php
	class HasilAnalisaController
	{

		public function home(){
			$gejalas=Gejala::viewGejala();
			$kodeAnalisa=Analisa::kodeAnalisa();
			$listGejala=Analisa::listGejala();
			require_once('views/v_Analisa.php');
		}

		public function hasilAnalisa(){
			$check = HasilAnalisa::checkGejala($_POST["checkGejala"]);
			$jumlahPenyakit=HasilAnalisa::jumlahPenyakit();
			$Penyakit = HasilAnalisa::listPenyakit();

			$listGejala=HasilAnalisa::listGejala();



			require_once('views/v_HasilAnalisa.php');
			//header("location:index.php?controller=HasilAnalisa&action=hasilAnalisa");
		}


}
?>
