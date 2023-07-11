<?php session_start();
if (isset($_SESSION["admin"]))
{
	
}
else if (isset($_SESSION["username"]))
{
	
}
else
{
    header('Location: login.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bakeaholics - My Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Poppins', sans-serif;
    }
    .main {
        height: 400px;
        width: 70%;
        margin: 5% auto;
		backface-visibility: visible;
		border-radius: 15px;
        border: 1px solid #00DCFF;
        box-shadow: 0 0 5px #FF0080; 
		background: url("https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-poster-background-material-gradient-poster-design-image_19245.jpg");
		background-size: cover;
        border-radius: 15px 15px 15px 15px;
    }
    .main .right {
        float: right;
        width: 45%;
        height: 100px;
        
    }
    .right .content {
        width: 80%;
        margin: auto;
        padding-top: 100px;
        color: #E8E7E7;
        
    }
    .right .content i{
        width: 50px;
        text-align: center;
        font-size: 35px;
        margin-right: 10px;
    }
    .right .content p {
        padding: 15px;
        font-size: 18px;
        }
	
	.right .content a{
		color: #ECECEC;
		text-decoration-line: none;
		}
		
    .main .left {
        width: 50%;
        height: 400px;
        float: left;
    }

    .left form {
        width: 80%;
        margin: auto;
		color: #FFFFFF;
    }
    form input {
        width: 40%;
        margin:inherit;
        padding: 3%;
        margin-bottom: 10px;
        display: block;
        border: none;
        outline: none;
        border-bottom: 2px solid rgba(0, 0, 0, .3);
    }
    form textarea {
        width: 98%;
        margin: 2%;
        padding: 3%;
        border: none;
        resize: none;
        outline: none;
        border-bottom: 2px solid rgba(0, 0, 0, .3);
    }
    form input[type=submit] {
        width: 20%;
        border: none;
        outline: none;
        background: linear-gradient(to left, rgb(236, 0, 140), rgb(252, 103, 103));
        border-radius: 15px;
        font-weight: bolder;
        color: white;
        font-size: 19px;
        padding: 0px;
    }
    .left .title {
        margin: auto;
        width: 100%;
    }
    .title h1 {
        text-align: center;
        padding: 10px;
    }
    
</style>
	<body class="contact" id="contact">

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">🧁Bakeaholics</a></strong></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
						<li><a href="AdminAccount.php">My Account</a>
							<ul class="dropdown">
                			<li><a href="login.php">Log in/Register</a></li>
                			<li><a href="AdminAccount.php">My Orders</a></li>
                			<li><a href="logout.php">Log Out</a></li>
            				</ul></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
	    <?php
		$con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	
		$sql = "SELECT * FROM `customer` WHERE `customer`.`Role` = 'Admin';";
	
		$result = mysqli_query($con, $sql);
	
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
	?>
  <div class="row" style="width: auto" align="center";>
  <div class="column" align="center">
    <div class="card" align="center">
	  <p></p>
      <div class="container" style="align-content: center; background-color: aliceblue; border-color:blueviolet; border:ridge;">
        <img src="images/profileicon.png" style="width: 200px; height: 200px"></a>
        <h2><?php echo $row["CustomerName"]?></h2>        
        <p><strong>Email :</strong> <?php echo $row["email"]?></p>
		<p><strong>Contact No. :</strong> <?php echo $row["ContactNo"]?></p>  
      </div>
    </div>
	</div>
	<?php
	  		}
		}
		mysqli_close($con);
	?>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://web.facebook.com/BakecraftsBySenu/?_rdc=1&_rdr" class="icon fa-facebook"></a></li>
						<li><a href="https://instagram.com/_bakeaholics_?igshid=YmMyMTA2M2Y=" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; D H Pussewala</li><li>BAKEAHOLICS - Bakecrafts by Senu</li>
						<li>2022</li>
					</ul>
				</div>
                <p>▫️ <a href="FAQ.html">FAQ</a>  |    <a href="privacyPolicy.html">Privacy Policy </a>  |  <a href="termsAndConditions.html">Terms &amp; Conditions </a>▫</p>
			</footer>

	</body>
</html>