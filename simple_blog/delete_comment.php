<?php
	session_start();

	require_once './models/comment_model.php';

	if(!empty($_POST)) {
		$deleteComment = new CommentModel();
		$deleteComment->deleteCommentById($_POST['comment_id']);
	}

	header('location: /post.php?id=' . $_POST['post_id']);