<?php
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'Login':
		require_once('models/m_Login.php');
		$controller=new LoginController();
		break;

		case 'Home':
		$controller=new HomeController();
		break;

		case 'Register':
		require_once('models/m_Register.php');
		$controller=new RegisterController();
		break;

		case 'Profile':
		require_once('models/m_User.php');
		$controller=new ProfileController();
		break;

		case 'Analisa':
		$controller=new AnalisaController();
		require_once('models/m_Gejala.php');
		require_once ('models/m_Analisa.php');
		break;

		case 'Gejala':
		$controller=new GejalaController();
		require_once('models/m_Gejala.php');
		break;

		case 'Penyakit':
		$controller=new PenyakitController();
		require_once('models/m_Penyakit.php');
		break;

		case 'Cocok':
		$controller=new CocokController();
		require_once('models/m_Penyakit.php');
		require_once('models/m_Gejala.php');
		require_once('models/m_Cocok.php');
		break;

		case 'HasilAnalisa':
		$controller=new HasilAnalisaController();
/*		require_once('models/m_Penyakit.php');
		require_once('models/m_Gejala.php');
		require_once('models/m_Cocok.php');*/
		require_once ('models/m_HasilAnalisa.php');
		break;

	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['home','authentication'],
'Home' => ['home','homeAdmin'],
'Register' => ['home','register'],

                     'Profile' => ['home','editUser'],
'Analisa' => ['home','hasilAnalisa'],
'Gejala' => ['home','tambahGejala','editGejala','hapusGejala'],
'Penyakit' => ['home','tambahPenyakit','editPenyakit','hapusPenyakit'],
'Cocok' => ['home','tambahCocok','hapusCocok'],
'HasilAnalisa'=>['hasilAnalisa']

	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
