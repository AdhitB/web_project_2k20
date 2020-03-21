<?php

	require('server.php');

	$username = $_POST['username'];

	$sql = "SELECT * FROM users WHERE username = '$username'";

	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0 ){ //username availability check

		echo "USERNAME IS UNAVAILABLE, pick another one!";

	}else{

		echo "USERNAME IS AVAILABLE - not registered yet!";
	}


	mysqli_close($db); //close connection

?>