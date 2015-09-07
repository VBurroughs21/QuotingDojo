<?php 
	session_start();
	require_once("connection.php");


	$errors = array();

	if (isset($_POST['add_quote']) && $_POST['add_quote'] != null) {
		if (!isset($_POST['name']) && $_POST['name'] == null) {
		 	array_push($errors, "Add name.");
		}
		if (!isset($_POST['quote']) && $_POST['quote'] == null) {
			$errors[] = "Add quote.";
		}

		// if (!empty($errors)) {
		//  	$_SESSION['errors'] = $errors;
		//  	header('Location: index.php');
		// } else {
		// 	header('Location: main.php');
		// }
		header('Location: index.php');
	} 

	if (isset($_POST['skip'])) {
		header('Location: main.php');
	}
	die();

?>