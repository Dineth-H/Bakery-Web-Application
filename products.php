<?php session_start();
if (isset($_SESSION["admin"]))
{
	
}
else if(isset($_SESSION["username"]))
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
		<title>Bakeaholics - Order Now</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
	<body>

		<!-- Header -->
			<header id="header" class="skels-layers-fixed">
				<h1><a href="index.html"><b>🧁Bakeaholics</b></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="products.php">Order</a></li>
						<li><a href="ContactUs.html">Contact Us</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
						<li><a href="AdminAccount.php">My Account</a><ul class="dropdown">
                			<li><a href="login.php">Log in/Register</a></li>
                			<li><a href="AdminAccount.php">My Orders</a></li>
                			<li><a href="logout.php">Log Out</a></li>
            				</ul></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Can't Wait to taste? Order Now😍&nbsp;</h2>
					</header>

					<!-- Text -->
						<section>
							<h3>Product List</h3>
							<p>Choose from cakes to cupcakes, chocolates, desserts and pastries. All are freshly made and home baked just for you!. If u wish to customize your products further, pls get in touch with us by <a href="ContactUs.html">Clicking here.</a></p>

							<hr />

				
						<section>
							<div align="center">
                      <form method="get" action="">
                      <input type="text" name="txtSearch" id="txtSearch" placeholder="search"> 
                          <input type="submit" name="btnSubmit" value="Search" align="middle">
                      </form>
                      </div>
                      <?php
                      $con = mysqli_connect("localhost","root","","bakeaholics - it21717086","3306");
                      if (!$con)
                      {
                          die("Sorry!!! We are facing technical issue..");
                      }

                      $sql = "SELECT * FROM `product`;";

                      $result = mysqli_query($con, $sql);

                      if (mysqli_num_rows($result) > 0)
                      {
                          while($row = mysqli_fetch_assoc($result))
                          {
                  ?>
              <div class="row" style="width: auto">
              <div class="column" style="border:ridge; border-color:darksalmon;">
                <div class="card">
                  <p></p>
                  <img src="<?php echo $row["imagePath"]?>"  style=" max-width: 720px; max-height: 460px" >
                  <div class="container">
                    <h2><?php echo $row["productName"]?></h2>        
                    <p><?php echo $row["description"]?></p>
                    <p>Price per 1kg : Rs. <?php echo $row["price"]?>.00 </p>
                    <p align="center">
                        <input type="range" max="10" min="1">
                        <a href="ShoppingCart.php?id=<?php echo $row["productID"]; ?>">Add to Cart</a>
                    </p>
                    <br>
                  </div>
                </div>
                </div>
                <?php
                        }
                    }
                    mysqli_close($con);
                ?>
                            
 </section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://web.facebook.com/BakecraftsBySenu/?_rdc=1&_rdr" class="icon fa-facebook"></a></li>
						<li><a href="https://instagram.com/_bakeaholics_?igshid=YmMyMTA2M2Y=" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; D H Pussewala</li>
						<li>BAKEAHOLICS - Bakecrafts by Senu</li>
						<li>2022</li>
					</ul>
				</div>
                <p>▫️ <a href="FAQ.html">FAQ</a>  |    <a href="privacyPolicy.html">Privacy Policy </a>  |  <a href="termsAndConditions.html">Terms &amp; Conditions </a>▫</p>
			</footer>

	</body>
</html>