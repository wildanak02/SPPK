<?php
class User
{

	public $idUser;
	public $username;
  public $password;
  public $nama;



	function __construct($idUser,$username, $password,$nama)
	{
		$this->idUser=$idUser;
		$this->username=$username;
    $this->password=$password;
    $this->nama=$nama;

	}


	public static function viewUser(){
	    $list = [];
      $sesi=$_SESSION['login'];
			$db = DB::getInstance();

			$req = $db->query("SELECT * FROM user WHERE username = '$sesi'");
	    foreach ($req->fetchAll() as $user) {
	  			$list[] = new User($user['idUser'],$user['username'],$user['password'],$user['nama']
	  				);
	  		}
	  		return $list;
	  }

    public static function editUser($idUser,$nama,$username,$password)
    {
      $db = DB::getInstance();

      $req = $db->query("UPDATE user SET username='".$username."', nama='".$nama."', password='".$password."' WHERE idUser='$idUser'");
      return $req;
    }



}

?>
