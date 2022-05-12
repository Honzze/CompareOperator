<?php

$login_valide = "admin";
$pwd_valide = "admin";

if (isset($_POST['login']) && isset($_POST['pwd'])) {

	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {

		session_start ();
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		header ('location: ../admin.php');
	}
	else {
		echo '<body onLoad="alert(\'Administrateur non reconnu...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>