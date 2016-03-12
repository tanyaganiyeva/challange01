<?php 

include "db.php";

$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id='$id'";

$query = mysqli_query($connection, $delete);

header('Location:admin_page.php');


 ?>