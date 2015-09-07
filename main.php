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
			div {
				border-bottom: 1px solid black;
			}
			.author {
				margin-left: 55px;
			}
		</style>
	</head>
	<body>
		<h2>Here are the awesome quotes!</h2>
		<?php
			$query = "SELECT users.name AS name, quotes.quote AS quote FROM users LEFT JOIN quotes ON users.id = quotes.user_id"; 
			$results = fetch($query);
			foreach ($results as $row) { ?>
				<div> 
					<p class="quotes">  "<?php echo $row['quote'];?>"</p>
					<p class="author"> -<?php echo $row['name'];?></p>  
				</div>
			 	
			<?php } ?>
		<!-- call php to insert quote, descending order hh:mm March 3 2014 horizonal line after each <div> </div>-->
		
	</body>
</html>