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

		public static function editGejala($idGejala,$gejala)
		{
			$db = DB::getInstance();

			$req = $db->query("UPDATE gejala SET gejala='".$gejala."' WHERE idGejala='$idGejala'");
			return $req;
		}



		public static function hapusGejala($idGejala){
	$db = DB::getInstance();

	$req = $db->query("DELETE FROM gejala WHERE idGejala='$idGejala'");


		return $req;
}

		public static function reset(){
			$id=0;
	$db = DB::getInstance();
	$req = $db->query("SELECT COUNT(`idGejala`) as id FROM `gejala`");
	foreach ($req as $item) {
			$id=$item['id'];
		}
	$req2 = $db->query("ALTER TABLE gejala AUTO_INCREMENT = $id");


		return $req2;
}

}

?>
