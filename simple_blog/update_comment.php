<?php 
	require_once './models/comment_model.php';

	if(!empty($_POST['new_comment'] && $_POST['comment_id'])) {
		$updateComment = new CommentModel();
		$updateComment->updateCommentById($_POST['new_comment'], $_POST['comment_id']);
	}

	header('location: /post.php?id=' . $_POST['post_id']);