<?php session_start();
	$con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
	if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	$sql = "DELETE FROM `product` WHERE `product`.`productID` = ".$_GET["id"];

	if (mysqli_query($con, $sql))
	{
		header('Location:ViewProductsToRemove.php');
	}
?>