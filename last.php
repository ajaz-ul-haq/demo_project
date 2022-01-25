<?php
require "db_cnct.php";
$sqlm = "SELECT * FROM login";
$resultsm = $conn->query($sqlm);
$count = $resultsm->num_rows;
$last =  ceil($count / 15);
 ?>
