<?php
class Cocok
{
	public $idCocok;
	public $idGejala;
	public $idPenyakit;
	public $penyakit;



	function __construct($idCocok,$idGejala,$idPenyakit,$penyakit)
	{
		$this->idCocok=$idCocok;
		$this->idGejala=$idGejala;
		$this->idPenyakit=$idPenyakit;
		$this->penyakit=$penyakit;
	}

	public static function tambahCocok($idPenyakit,$idGejala){
		$db = DB::getInstance();
		$gejala = array();
		$gejala=$idGejala;


		for ($i=0; $i <sizeof($gejala) ; $i++) {
			$req = $db->query("INSERT INTO cocok
				VALUES (NULL,'".$gejala[$i]."','".$idPenyakit."');
				");
			}


			return $req;
		}

		public static function viewCocok(){
			$list = [];

			$db = DB::getInstance();

			$req = $db->query("SELECT * FROM cocok join penyakit on cocok.idPenyakit=penyakit.idPenyakit");
			foreach ($req->fetchAll() as $cocok) {
				$list[] = new Cocok($cocok['idCocok'],$cocok['idGejala'],$cocok['idPenyakit'],$cocok['penyakit']
			);
		}
		return $list;
	}

	
	public static function hapusCocok($idCocok){
		$db = DB::getInstance();

		$req = $db->query("DELETE FROM cocok WHERE idCocok='$idCocok'");


		return $req;
	}


}

?>
