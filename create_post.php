<?php

session_start();
require_once './models/post_model.php';
require_once './view/create_post_view.php';

if (!isset($_SESSION['user_id'])) {
	header('location: /');
	exit(0);
}

if (empty($_POST)) {
	require_once './view/create_post_view.php';
	exit(0);
}

$postModel = new PostModel();

if(empty($_POST['title']||$_POST['body'])) {
		header('location: /');
		exit(0);
} else {
		$postModel->create($_POST['title'], $_POST['body'], $_SESSION['user_id']);
		header('location: /');
}
