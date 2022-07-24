<?php

include_once('../include/config.php');
include_once('../include/connection.php');
include_once('../include/global.php');

	if($_SERVER["REQUEST_METHOD"] == "POST"){
			
	$email = $_POST['email'];
	$password = $_POST['password'];
	$bool = true;

	$query = "Select * from users WHERE email = '$email'";
	$request=exec_query(DBNAME,$query);
		
	
	$table_email = "";
	$table_password = "";
	 if((mysqli_num_rows($request))==0)
	{
		echo "<div class='erroraccess'>NO USER FOUND</div>";
	}
	else
	{
	 $row=mysqli_fetch_array($request);
	 $table_email = $row['email'];
	 $username = $row['username'];
	 $table_password = $row['password'];

	if(($email == $table_email) && ($password == $table_password)){
		if($password == $table_password){
			$_SESSION['user'] = $username;
			header("location: ../main.php");
		}
	}
	}
}
?>