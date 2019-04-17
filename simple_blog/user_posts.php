<?php

	session_start();

	require_once './models/post_model.php';
	$userPostModel = new PostModel();
	$posts = $userPostModel->getPostByUserId($_GET['user_id']);

	require_once './models/user_model.php';
	$userModel = new UserModel();
	$email = $userModel->getMailById($_GET['user_id']);
	
	require_once './view/user_posts_view.php';