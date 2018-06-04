<?php
class Analisa
{

	public $idAnalisa;
	public $gejala;
	public $idPenyakit;


	function __construct($idGejala,$gejala,$idPenyakit)
	{
		$this->idGejala=$idGejala;
		$this->gejala=$gejala;
		$this->idPenyakit=$idPenyakit;
	}

	public static function tambahGejala($gejala,$idPenyakit){
		$db = DB::getInstance();
		$req = $db->query("INSERT INTO gejala
			VALUES (NULL,'".$gejala."','".$idPenyakit."');
			");

		return $req;
	}

	public static function viewGejala(){
	    $list = [];

			$db = DB::getInstance();

			$req = $db->query("SELECT * FROM gejala");
	    foreach ($req->fetchAll() as $gejala) {
	  			$list[] = new Gejala($gejala['idGejala'],$gejala['gejala'],$gejala['idPenyakit']
	  				);
	  		}
	  		return $list;
	  }



}

?>
