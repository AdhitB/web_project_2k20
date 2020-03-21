<?php
			session_start();
			$db = mysqli_connect('localhost', 'root', '', 'project');

			//log user in from login page
			if(isset($_POST['login'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
			
			$query = "SELECT * FROM users WHERE username= '$username' && password = '$password' ";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result)==1){

			//log user in
				$_SESSION['username']=$username;
				header("location: index.php"); //redirect to homepage

			}else{
				header('location:login.php'); //redirect to login page
			}
		}
?>