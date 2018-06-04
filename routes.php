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

		case 'Analisa':
		$controller=new AnalisaController();
		require_once('models/m_Gejala.php');
		break;

		case 'Gejala':
		$controller=new GejalaController();
		require_once('models/m_Penyakit.php');
		require_once('models/m_Gejala.php');
		break;

		case 'Penyakit':
		$controller=new PenyakitController();
		require_once('models/m_Penyakit.php');
		break;

	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['home','authentication'],
'Home' => ['home','homeAdmin'],
'Register' => ['home','register'],
'Analisa' => ['home'],
'Gejala' => ['home','tambahGejala','klikEditGejala','hapusGejala'],
'Penyakit' => ['home','tambahPenyakit','editPenyakit','hapusPenyakit']
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
