<?php 
	session_start();
	require_once './models/todo.php';
	if(isset($_POST)) {
		$todoModel = new ToDo();
		$todoModel -> delete($_POST['index']);
	}

	header('location: /')
?>