<?php
	class AnalisaController
	{

		public function home(){
			$gejalas=Gejala::viewGejala();
			require_once('views/v_Analisa.php');
		}


}
?>
