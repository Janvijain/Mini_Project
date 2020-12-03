<?php 
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == "admin" and $password == "admin") {
	header("location:tabs.php");
}else{
	header("location:index.php");
}
 ?>