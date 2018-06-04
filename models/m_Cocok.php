<?php
class Cocok
{
	public $idCocok;
	public $idGejala;
public $idPenyakit;



	function __construct($idCocok,$idGejala,$idPenyakit)
	{
$this->idCocok=$idCocok;
$this->idGejala=$idGejala;
$this->idPenyakit=$idPenyakit;
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

	// public static function viewGejala(){
	//     $list = [];
	//
	// 		$db = DB::getInstance();
	//
	// 		$req = $db->query("SELECT * FROM gejala");
	//     foreach ($req->fetchAll() as $gejala) {
	//   			$list[] = new Gejala($gejala['idGejala'],$gejala['gejala']
	//   				);
	//   		}
	//   		return $list;
	//   }
//
//
// 		public static function hapusGejala($idGejala){
// 	$db = DB::getInstance();
//
// 	$req = $db->query("DELETE FROM gejala WHERE idGejala='$idGejala'");
//
//
// 		return $req;
// }


}

?>
