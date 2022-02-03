<?php
   require "db_cnct.php";
   
   if($_SERVER["REQUEST_METHOD"] == "GET"){
   	$page = $_GET['page'];
    }
    else{
   	 header("Location:db.php?page=1");
    }
   
   $offset = ($page-1)*15;
   $sql = "SELECT * FROM login LIMIT 15 OFFSET " .$offset;
   $sqlm = "SELECT * FROM login";
   
   
   $results = $conn->query($sql);
   $resultsm = $conn->query($sqlm);
   
   if($results === false){
   	echo $mysqli -> error;
   }
   else{
   	$count = $resultsm->num_rows;
   }
   
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
         #btm{
         margin-left: 300px;
         margin-right: 300px;
         margin-top: 50px;
         margin-bottom: 200px;
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
         <br>
         <tr>
            <th>UserId </th>
            <th>Username</th>
            <th>Password(Hashed)</th>
         </tr>
         <?php
            if ($count > 0) {
            
                  while($row = $results->fetch_assoc()) {
            		  echo "<tr><th>".$row['id']."</th><th>".$row['user']."</th><th>".$row['pass']."</th>";
                      }
                   }
            mysqli_close($conn);
            ?>
      </table>
      <br><br>
      <table id="btm">
         <?php
            if ($count<$page*15){
            	$show = $count;
            }
            else{
            	$show = $page * 15;
            }
            
            $prev = $page-1;
            echo "<center><em>Showing</em> <strong>".($offset+1)." - ".$show."</strong><em> results of </em><strong> ".$count."</strong> <em>Records</em>";
             if($page>1){
            		echo"<a href='db.php?page='".$prev."> Prev</a>";
            }
            else{
            
            			echo"<a href='db.php?page='".$offset."> Next </a>";
            }
            ?>
         <tr>
            <th>
               <a href="up_db.php">
                  <button class="btn btn-inline btn-primary" value="Update Database">Update Database</button>
            </th>
            <th><form action="insert.php" method="GET">
            <input type="hidden" name="random_parameter" value="" id="r"/>
            <a href="insert.php"><button class="btn btn-inline  btn-primary" value="Add More random">Add Randomly</button></a>
            </form></th>
         </tr>
         <br><br>
      </table>
   </body>
</html>
