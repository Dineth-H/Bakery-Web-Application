<?php session_start();
		$productname = $_POST["txtTitle"];
		$description = $_POST["txtDescription"];
		$price = $_POST["txtContactNumber"];
		$category = $_POST["lstCategory"];
		
		if (!file_exists($_FILES['imageFile']['tmp_name']) ||
		   !is_uploaded_file($_FILES['imageFile']['tmp_name']))
			{
				$image = $_SESSION["imagePath"];
			}
			else
			{
				$image = "uploads/".basename($_FILES["imageFile"]["name"]);
				move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
			}
		
		$con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `product` SET `productName` = '".$productname."', `description` = '".$description."', `imagePath` = '".$image."', `price` = '".$price."', `category` = '".$category."' WHERE `product`.`productID` = ".$_SESSION["id"].";";
		
		if (mysqli_query($con, $sql) )
		{
				header('Location:viewProductsToEdit.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
?>