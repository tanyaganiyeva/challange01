<?php 

include "db.php";

if(isset($_POST['getStarted'])){

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

}

$insert = "INSERT INTO users (user_name, user_surname, user_email, password) VALUES ('$name', '$surname', '$email', '$password')";

$query = mysqli_query($connection, $insert);

if ($query){
	echo "connect";
}

header('Location:index.php');

 ?>