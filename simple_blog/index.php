<?php

	session_start();
	require_once './models/post_model.php';
	$postModel = new PostModel();
	$posts = $postModel->getAll();
	require_once './view/main.php';

?>