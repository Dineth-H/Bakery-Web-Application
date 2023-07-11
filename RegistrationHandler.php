<?php session_start();
	if (isset($_POST["btnSignUp"]))
	{
		$name = $_POST["txtName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$contactnumber = $_POST["txtContactNo"];
		
		$con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "INSERT INTO `customer` (`email`, `CustomerName`, `ContactNo`, `password`) VALUES ('".$email."', '".$name."', '".$contactnumber."', '".$password."');";
		
		
		mysqli_query($con, $sql);
		
        
		header('Location:login.php');
	}
?>