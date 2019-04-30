<?php 
	session_start();

	require_once './models/comment_model.php';

	if(!empty($_POST)) {
		$commentModel = new CommentModel();
		$commentModel->create($_POST['body'], $_SESSION['user_id'], $_POST['post_id']);
		
		header('location: /post.php?id=' . $_POST['post_id']);
	}



