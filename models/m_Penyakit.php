<?php
class Penyakit
{

	public $idPenyakit;
	public $penyakit;
	public $solusi;


	function __construct($idPenyakit,$penyakit,$solusi)
	{
		$this->idPenyakit=$idPenyakit;;
		$this->penyakit=$penyakit;
		$this->solusi=$solusi;
	}

	public static function tambahPenyakit($penyakit,$solusi){
		$db = DB::getInstance();
		$req = $db->query("INSERT INTO penyakit
			VALUES (NULL,'".$penyakit."','".$solusi."');
			");

		return $req;
	}

	public static function viewPenyakit(){
	    $list = [];

			$db = DB::getInstance();

			$req = $db->query("SELECT * FROM penyakit");
	    foreach ($req->fetchAll() as $penyakit) {
	  			$list[] = new Penyakit($penyakit['idPenyakit'],$penyakit['penyakit'],$penyakit['solusi']
	  				);
	  		}
	  		return $list;
	  }

		public static function editPenyakit($idPenyakit,$penyakit,$solusi)
		{
			$db = DB::getInstance();

			$req = $db->query("UPDATE penyakit SET penyakit='".$penyakit."', solusi='".$solusi."' WHERE idPenyakit='$idPenyakit'");
			return $req;
		}

		public static function hapusPenyakit($idPenyakit){
	$db = DB::getInstance();

	$req = $db->query("DELETE FROM penyakit WHERE idPenyakit='$idPenyakit'");


		return $req;
}
		public static function reset(){
			$id=0;
	$db = DB::getInstance();
	$req = $db->query("SELECT COUNT(`idPenyakit`) as id FROM `penyakit`");
	foreach ($req as $item) {
			$id=$item['id'];
		}
	$req2 = $db->query("ALTER TABLE penyakit AUTO_INCREMENT = $id");


		return $req2;
}

}

?>
