<?php

	session_start();

	require_once './models/user_model.php';

	if(!empty($_POST)) 
	{
		$userModel = new UserModel();
		$user = $userModel->getUser($_POST['mail'], $_POST['pass']);

			if(!$user) {
				echo "user doesn't exist!";
			} else {
				// $_SESSION['user'] = [];
				// $_SESSION['user']['id'] = $user['id'];
				// $_SESSION['user']['email'] = $user['email'];
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['user_email'] = $user['email'];
				header('location: /');
				var_dump($user); 
			}

	} else {
		require_once './view/login_view.php';
	}

	
?>