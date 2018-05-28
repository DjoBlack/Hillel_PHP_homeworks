<?php
	session_start();
	require_once './models/todo.php';

	$todoModel = new ToDo();

	if(!empty($_POST['text']))
	{
		$todoModel->save($_POST['text']);
	}

	require_once './view/index-view.php';
?>