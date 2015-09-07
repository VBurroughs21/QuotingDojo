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
			#skip {
				margin-left: 350px;
			}
			#errors {
				color: red;
			}
		</style>
	</head>
	<body>
		<h1>Welcome to QuotingDojo</h1>
		<p id="errors"><?php if (isset($_SESSION['errors'])) {
					foreach ($_SESSION['errors'] as $value) {
						echo $value. "<br>";
					}
					$_SESSION = array();
				} ?></p>
		<form method="post" action="process.php">
			<p>Your name: <input type="text" name="name"></p>
			<p>Your quote: <input type="text" name="quote" id="quote"></p>
			<input type="submit" value="Add my quote!" name="add_quote">
			<input type="submit" value="Skip to quotes!" name="skip" id="skip">
		</form>
	</body>
</html>