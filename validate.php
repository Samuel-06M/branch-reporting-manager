<?php
include("config.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT username, password FROM employees WHERE username = '$username' AND password='$password';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['user'] = $username;
	//$_SESSION['firstname'] = $firstname;
	header('Location: welcome.php');  
}
else{ 
	header('Location: index.html');
}
?>