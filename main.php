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
			$query = "SELECT name, quote, DATE_FORMAT(created_at, '%l:%i%p %M %e %Y') AS time FROM users;"; 
			$results = fetch($query);
			foreach ($results as $row) { ?>
				<div> 
					<p class="quotes">  "<?php echo $row['quote'];?>"</p>
					<p class="author"> -<?php echo $row['name']. " ". $row['time'];?></p>  
				</div>
			<?php } ?>
	</body>
</html>