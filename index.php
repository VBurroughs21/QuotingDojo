<?php 
	session_start();

	require_once("connection.php");
	
 ?>

<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>QuotingDojo</title>
		<style type="text/css">
			p {
				vertical-align: top;
			}
			#quote {
				width: 500px;
				height: 100px;
			}
			.button {
				display: inline;
			}
		</style>
	</head>
	<body>
		<h1>Welcome to QuotingDojo</h1>
		<form method="post" action="process.php">
			<p>Your name: <input type="text" name="name"></p>
			<p>Your quote: <input type="text" name="quote" id="quote"></p>
			<input type="submit" value="Add my quote!" name="add_quote" class="button">
			<input type="submit" value="Skip to quotes!" name="skip" class="button">
		</form>
		<!-- <p><?php foreach ($_SESSION['errors'] as $error) {
			// echo $value;
		} ?></p> -->
		<?php if (isset($_SESSION['errors'])) {
				var_dump($_SESSION['errors']); 
				echo $_SESSION['name'];
			} ?>
	</body>
</html>