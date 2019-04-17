<?php

	require_once './models/user_model.php';

	if(empty($_POST)) {
		require_once './view/register_view.php';
		exit(0);
	}

	$userModel = new UserModel();

	if($userModel->getUserByEmail($_POST['mail'])) {
		echo 'user exist!';
	} else {
		$userModel->create($_POST['mail'], $_POST['pass']);
		header('location: /');
	}
	
?>