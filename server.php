<?php
	session_start();
	
		//connect to database
		$db = mysqli_connect('localhost', 'root', '', 'project');
		//if the submit button is clicked
		if(isset($_POST['register'])){
			$fname = mysqli_real_escape_string($db, $_POST['fname']); // prevent sql injection
			$lname = mysqli_real_escape_string($db, $_POST['lname']);
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$dob = mysqli_real_escape_string($db, $_POST['dob']);
			$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
			$gender = mysqli_real_escape_string($db, $_POST['gender']);

			//checking if username already exists

			$query = "SELECT * FROM users WHERE username= '$username' AND password= '$password' ";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result)==1){
				echo "Username already taken";
			}else{

				//inserting values in database

				$sql = "INSERT INTO users (fname, lname, username, password, email, dob, mobile, gender)
				VALUES ('$fname', '$lname', '$username', '$password', '$email', '$dob', '$mobile', '$gender')";
				mysqli_query($db, $sql);
				echo "Registration successful";
				}
				header('location: login.php'); //redirecting to login page
			}

?>