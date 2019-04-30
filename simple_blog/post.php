<?php
	session_start();
	require_once './models/post_model.php';
	$postModel = new PostModel();
	$post = $postModel->getPostById($_GET['id']);

	require_once './models/comment_model.php';
	$commentModel = new CommentModel();
	$comments =$commentModel->getByPostID($_GET['id']);

	require_once 'view/post_view.php';