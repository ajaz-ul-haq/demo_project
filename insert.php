		<?php

		require "db_cnct.php";
		require "last.php";


		if($_SERVER["REQUEST_METHOD"] == "POST"){
		$random = 1;
		$username = $_POST["user"];
		$pass = $_POST["pass"];
		$password = password_hash($pass,PASSWORD_DEFAULT);


		$sql = "INSERT INTO login(user,pass) VALUES ('$username','$password')";
		if(mysqli_query($conn, $sql)){
			header("Location:db.php?page=".$last."#btm");
			echo("Success");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);}
		elseif($_SERVER["REQUEST_METHOD"] == "GET"){
				$n=rand(8,12);
				$username = getName($n);
				$pass = getName($n);
				$password = password_hash($pass,PASSWORD_DEFAULT);

				$sql = "INSERT INTO login(user,pass) VALUES ('$username','$password')";

				if(mysqli_query($conn, $sql)){

						header("Location:db.php?page=".$last."#btm");
					echo("Success");
				} else{
					echo "ERROR: Hush! Sorry $sql. "
						. mysqli_error($conn);
				}

		}
		else{
			echo  "The page you are trying to load requires a parameter";
		}






function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
		?>
