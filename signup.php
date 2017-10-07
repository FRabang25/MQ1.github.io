<?php	
	require("connection.php");

		$con = new PDO("mysql:host=localhost; dbname=mq1db;","root","");
		// INSERT INTO is ansql command to add new record to the databse
		$query="INSERT INTO users VALUES('".$_POST["uname"]."','".$_POST["pword"]."')";
		$conn->query($query);
		header("location: signup1.php?Success=qwertyuiop");
		
		echo "I WILL PASS";
	
?>