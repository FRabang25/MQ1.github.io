<?php	
	if(isset($_POST["login"])){
		// create a connection
		$con = new PDO("mysql:host=localhost; dbname=mq1db;","root","");
		// this is sql command
		$sql="SELECT * FROM users WHERE uname='". $_POST["uname"] ."' and pword='". $_POST["pword"] ."'";
			$result=$con->query($sql); //the command will be executed and the result will be passed to the variable result
			$rows=$result->rowCount(); // get the rowcount and pass to variable rows.
			if($rows>=1){
				header("location: profile.php");
			}else{
				echo "I WILL STILL PASS";
			}
	}
?>