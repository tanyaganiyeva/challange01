<?php 

include "db.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection,$query); 

session_start();

 ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form/Admin Page</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>


<table class="responstable">
  
  <tr>
    <th>Name</th>
    <th>Surname</th>
    <th>E-mail</th>
    <th>Sign-up date</th>
    <th>Last sign-in date</th>
    <th></th>
  </tr>
  <?php 

while($row = mysqli_fetch_assoc($result)){
  echo '<tr><td>'.$row['user_name'].'</td><td>'.$row['user_surname'].'</td><td>'.$row['user_email'].'</td><td>'.$row['user_reg_date'].'</td><td>'.$row['user_last_log'].'</td><td><a href="delete.php?id='.$row['id'].'">DELETE</a></td></tr>';
 

};

  ?>
 
    
 

  
  
  
</table>
    
  </body>
</html>
