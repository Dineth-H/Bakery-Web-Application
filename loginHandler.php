<?php session_start();
	if (isset($_POST["btnSubmit"]))
	{
		$username = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		
		$con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "SELECT `Role` FROM `customer` WHERE `email`='".$username."' AND `password`='".$password."'";
		
		$result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
		
		if ($row["Role"] == "Admin")
		{	
             $_SESSION["admin"] = $username;
             header("Location: AdminAccount.php");
		}
		else if($row["Role"] == "User")
		{  
			$_SESSION["username"] = $username;
            header("Location: CustomerAccount.php");
		}
        else
        {
            header('Location:login.php');
        }
	}
?>
