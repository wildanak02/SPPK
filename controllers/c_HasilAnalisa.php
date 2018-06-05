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
		$kodeAnalisa=$_POST["kodeAnalisa"];
		$tanggalAnalisa=$_POST["tanggalAnalisa"];
		$namaAyam=$_POST["namaAyam"];
		$jumlahPenyakit=HasilAnalisa::jumlahPenyakit();
		$Penyakit = HasilAnalisa::listPenyakit();


		// $tanggalAnalisa=$_POST["tanggalAnalisa"];
		// $kodeAnalisa=$_POST["kodeAnalisa"];
		// $namaAyam=$_POST["namaAyam"];

		$listGejala=HasilAnalisa::listGejala();

	/*	foreach ($jumlahPenyakit as $item) {
			$jumlahP=$item["jumlahPenyakit"];
		}


		$p[];

		for ($i=1; $i < $jumlahP+1 ; $i++) {
			foreach ($listGejala as $item) {
				if ($i==$item['idPenyakit']) {
					// $p=array(

					// 'Penyakit'.$item['idPenyakit']=> $item['idGejala']


					// );
					array_push($p,'Penyakit'.$item['idPenyakit'].'=>'. $item['idGejala']);


				}

			}

		}
		$x=$p;*/



		require_once('views/v_HasilAnalisa.php');
			//header("location:index.php?controller=HasilAnalisa&action=hasilAnalisa");
	}

	public function simpanHasilAnalisa(){
		//$check = HasilAnalisa::checkGejala($_POST["checkGejala"]);
		$jumlahPenyakit=HasilAnalisa::jumlahPenyakit();


		$simpan = HasilAnalisa::simpanHasilAnalisa($_POST["kodeAnalisa"],$_POST["namaAyam"],$_POST["tanggalAnalisa"],$_POST["hasilAnalisa"]);





		//require_once('views/v_HasilAnalisa.php');
		header("location:index.php?controller=Analisa&action=home&success= Analisa berhasil disimpan!");
	}


}
?>
