<?php 

	session_start();

	require_once '/models/user.php';

	if (empty($_POST)) {
		require_once '/view/register-view.php';
		exit();
	}

	$user = new User();

	if($user -> validation($_POST['login'])){
		$user -> save($_POST['login'], $_POST['password']); 
	header('location: /');
	} else {
	echo('User already exist');
	
}
?>