<?php
class Register
{

	public $username;
	public $nama;
	public $password;


	function __construct($username,$nama,$password)
	{
		$this->username=$username;
		$this->nama=$nama;
		$this->password=$password;
	}

	public static function register($username,$nama,$password){
		$db = DB::getInstance();


		$req = $db->query("INSERT INTO user
			VALUES (NULL,'2','".$username."','".$nama."', '".$password."');
			");

		return $req;
	}


  public static function getUsername($username){
    $db = DB::getInstance();
    $error2=false;
    $getusername = $db->query("SELECT count(username) as u from user where username ='$username'");
    foreach ($getusername->fetchAll() as $unm) {
        $usrname= $unm['u'];
      }
      if ($usrname>0){
        $error2=true;
      }
      else{
        $error2=false;
      }
    return $error2;
  }

}

?>
