
		<?php

		require "db_cnct.php";

		$sql = "SELECT * FROM login";
		$results = mysqli_query($conn, $sql);
		if($results === false){
			echo mysqli_error($conn);
		}
		else{
			$data = mysqli_fetch_all($results, MYSQLI_ASSOC);
		}

		mysqli_close($conn);

		?>

		<!DOCTYPE html>
		<html>
		<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		table {
			margin-left: 300px;
			margin-right: 300px;
			margin-top: 50px;
		  border-collapse: collapse;
		  border-spacing: 0;
		  width: 60%;
		  border: 2px solid #ddd;
			border-radius: 10%;
		}

		th, td {
		  text-align: center;
		  padding: 16px;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;

		}
		</style>
		</head>
		<body>

		</table>

		<table>
		<form action="insert.php" method="POST">
		<tr><th>ID(<em>random</em>) </th>
			<th><input type="text" name="user" value="" required></th>
			<th><input type="password" name="pass" value="" required></th>
		</tr>

		</table><center>
			<br>
		<a href="insert.php"><button class="btn btn-inline  btn-primary" value="Add More">Add Now </button></a></form>
	</center>
	<br><center><br>

		<form action="insert.php" method="GET">
	<a href="insert.php"><button class="btn btn-inline  btn-primary" value="Add More random">Add Randomly</button></a>
	</form>
</center>
<br><br>



		</body>
		</html>
