<?php 
	session_start();
	require_once("connection.php");


	$errors = array();


	function insertData() {

	}

	if (isset($_POST['add_quote']) && $_POST['add_quote'] != null) {
		if (isset($_POST['name']) && $_POST['name'] != null) {
			$_SESSION['name'] = $_POST['name'];
		} else {
			$errors[] = "Add name";
		}
		if (isset($_POST['quote']) && $_POST['quote'] != null) {
			$_SESSION['quote'] = $_POST['quote'];
		} else {
			$errors[] = "Add quote";
		}

		if (!empty($errors)) {
		 	$_SESSION['errors'] = $errors;
		 	header('Location: index.php');
		} else {

			$query = "INSERT INTO users (name, created_at) VALUES('{$_SESSION['name']}', NOW());";			
			$query = "INSERT INTO quotes (quote, created_at, user_id) VALUES('{$_SESSION['quote']}', NOW(), (SELECT id FROM users WHERE name='123');";
			header('Location: main.php');
		}
	} 

	if (isset($_POST['skip'])) {
		header('Location: main.php');
	}

?>