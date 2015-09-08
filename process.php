<?php 
	session_start();
	require_once("connection.php");


	$errors = array();


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
			$query = "INSERT INTO users (name, quote, created_at) 
					VALUES('{$_POST['name']}', '{$_POST['quote']}', NOW())";
			$insertQuote = run_mysql_query($query);
			header('Location: main.php');
		}

		
	} 

	if (isset($_POST['skip'])) {
		header('Location: main.php');
	}

?>