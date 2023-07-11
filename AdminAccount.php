<?php session_start();
if (isset($_SESSION["admin"]))
{
	
}
else if (isset($_SESSION["username"]))
{
    header('Location: CustomerAccount.php');
}
else
{
    header('Location: login.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bakeaholics - Admin Account</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/dashBoardStyle.css"/>
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
        width: 90%;
        margin: auto;
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
        width: 30%;
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
			<section id="main" class="wrapper">
				<div class="container">

				  <header class="major special">
						<h2>Administrator Controls</h2>
						<p>---------------------------------------</p>
					</header>
				</div>
			</section>
		
            <table width="908" height="225" align="center">
              <tbody>
                <tr>
                  <td width="900"><div class="main-section">
                  <div class="dashbord">
                    <div class="icon-section"> <br />
                      <img src="images/profile.jpg" alt="" width="87" height="90" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"> <a href="ViewAdminProfile.php">My Profile<br> </a> </div>
                  </div>
                  <div class="dashbord dashbord-green">
                    <div class="icon-section"> <br />
                      <img src="images/add.png" width="93" height="96" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"> <a href="AddProduct.php">Add Products</a> </div>
                  </div>
                  <div class="dashbord dashbord-blue">
                    <div class="icon-section"> <br />
                      <img src="images/view.png" alt="" width="93" height="96" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"> <a href="ViewProducts.php">View Added Products</a> </div>
                  </div>
                  <div class="dashbord dashbord-skyblue">
                    <div class="icon-section"> <br />
                      <img src="images/publish.png" alt="" width="93" height="96" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"><a href="ViewProductsToRemove.php">Remove Products</a> </div>
                  </div>
                  <div class="dashbord dashbord-red">
                    <div class="icon-section"> <br />
                      <img src="images/edit.png" alt="" width="93" height="96" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"> <a href="ViewProductsToEdit.php">Change Product Details</a> </div>
                  </div>
                  <div class="dashbord dashbord-orange">
                    <div class="icon-section"> <br />
                      <img src="images/viewAll.png" alt="" width="93" height="96" />
                      <p>&nbsp;</p>
                    </div>
                    <div class="detail-section"> <a href="ViewCustomers.php">View All Registered Customers</a> </div>
                  </div>
                </div></td>
                </tr>
              </tbody>
            </table>
        
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