
		<?php

		require "db_cnct.php";

		$sql = "SELECT * FROM login";
		$results = mysqli_query($conn, $sql);
		if($results === false){
			echo mysqli_error($conn);
		}
		else{
			$data = mysqli_fetch_assoc($results);
		}

		mysqli_close($conn);

		?>

		<!DOCTYPE html>
		<html>
		<head>
		<!-- Latest compiled and minified CSS -->

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
			<table>
			<tr>
				<th><a href="up_db.php"><button class="btn btn-inline btn-primary" value="Update Database">Update Database</button></th>
					<th><a href="db.php?page=1"><button class="btn btn-inline  btn-primary" value="Show Database">Show Database</button></th>

			</tr>

			</table>
		</body>
		</html>
