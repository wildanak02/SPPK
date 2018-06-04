<?php
class Gejala
{

	public $idGejala;
	public $gejala;



	function __construct($idGejala,$gejala)
	{
		$this->idGejala=$idGejala;
		$this->gejala=$gejala;
	}

	public static function tambahGejala($gejala){
		$db = DB::getInstance();
		$req = $db->query("INSERT INTO gejala
			VALUES (NULL,'".$gejala."');
			");

		return $req;
	}

	public static function viewGejala(){
	    $list = [];

			$db = DB::getInstance();

			$req = $db->query("SELECT * FROM gejala");
	    foreach ($req->fetchAll() as $gejala) {
	  			$list[] = new Gejala($gejala['idGejala'],$gejala['gejala']
	  				);
	  		}
	  		return $list;
	  }


		public static function hapusGejala($idGejala){
	$db = DB::getInstance();

	$req = $db->query("DELETE FROM gejala WHERE idGejala='$idGejala'");


		return $req;
}


}

?>
