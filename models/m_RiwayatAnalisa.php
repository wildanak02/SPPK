<?php
class RiwayatAnalisa
{

	public $idAnalisa;
  public $username;
	public $kodeAnalisa;
  public $namaAyam;
  public $tanggalAnalisa;
  public $hasil;



	function __construct($idAnalisa,$username,$kodeAnalisa,$namaAyam,$tanggalAnalisa,$hasil)
	{
		$this->idAnalisa=$idAnalisa;
    $this->username=$username;
		$this->kodeAnalisa=$kodeAnalisa;
    $this->namaAyam=$namaAyam;
    $this->tanggalAnalisa=$tanggalAnalisa;
    $this->hasil=$hasil;
	}


	public static function viewRiwayat(){
	    $list = [];
      $sesi=$_SESSION['login'];
			$db = DB::getInstance();

      if ($sesi != 'a'){
        $req = $db->query("SELECT * FROM analisa where username='$sesi'");
  	    foreach ($req->fetchAll() as $riwayat) {
  	  			$list[] = new RiwayatAnalisa($riwayat['idAnalisa'],$riwayat['username'],$riwayat['kodeAnalisa'],$riwayat['namaAyam'],$riwayat['tanggalAnalisa'],$riwayat['hasil']
  	  				);
  	  		}
      }
      else {
        $req = $db->query("SELECT * FROM analisa");
  	    foreach ($req->fetchAll() as $riwayat) {
  	  			$list[] = new RiwayatAnalisa($riwayat['idAnalisa'],$riwayat['username'],$riwayat['kodeAnalisa'],$riwayat['namaAyam'],$riwayat['tanggalAnalisa'],$riwayat['hasil']
  	  				);
  	  		}
      }

	  		return $list;
	  }




		public static function hapusAnalisa($idAnalisa){
	$db = DB::getInstance();

	$req = $db->query("DELETE FROM analisa WHERE idAnalisa='$idAnalisa'");


		return $req;
}


}

?>
