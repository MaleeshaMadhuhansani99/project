<!DOCTYPE html>
<html>

<head>
	<title>Insert Conductor</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "conductor_db");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$pwd = $_REQUEST['pass'];
		$cpwd = $_REQUEST['comPass'];
        $date= date("Y/m/d");

		if ($pass != $cpass) {
			echo "<script> alert(' Please enter same password')</script>";
		}else{

			$sql = "INSERT INTO conductor_account(email,username,password,date) VALUES ('$email','$username','$pwd','$date')";
		}
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registered successfully.</h3>." . "<a href='login.php'>Login </a>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
