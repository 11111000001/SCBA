<?php
	include_once('../head.php');
?>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname =($_POST['fname']);
		$lname =($_POST['lname']);
		$email =($_POST['email']);
		$username =($_POST['username']);
		$password =($_POST['password']);
		$kname =($_POST['kname']);
		$bool = true;

		 $query1 =  "Select * from users";
		 $request1 = exec_query(DBNAME,$query1);
		while ($row = mysqli_fetch_array($request1)) {
			$table_users = $row['username'];
			if ($username == $table_users) {
				$bool = false;
				Print '<script>alert("Username already exists!");</script>';
				Print '<script>window.location.assign("../registerAdminUsers.php");</script>';
			}
		}

		if($bool){
			$query2 = "INSERT INTO `users`(`fname`, `lname`, `email`, `username`, `password`, `kname`) VALUES ('".$fname."','".$lname."','".$email."','".$username."','".$password."','".$kname."')";
			$request2 = exec_query(DBNAME,$query2);
			Print'<script>alert("Registered Successfully!");</script>';
			Print '<script>window.location.assign("../index.php");</script>';
		}
	}
?>