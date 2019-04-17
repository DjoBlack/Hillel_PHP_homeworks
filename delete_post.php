<?php
	session_start();

	require_once './models/post_model.php';

	if(!empty($_POST)) {
		$postModel = new PostModel();
		$postModel->deletePostById($_POST['id']);
	}

	header('location: /');