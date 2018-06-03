<?php
	class AnalisaController
	{

		public function home(){
			$gejalas=Gejala::viewGejala();
			$kodeAnalisa=Analisa::kodeAnalisa();
			$listGejala=Analisa::listGejala();
			require_once('views/v_Analisa.php');
		}

		public function hasilAnalisa(){
			require_once('views/v_HasilAnalisa.php');
		}


}
?>
