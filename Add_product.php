<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Spiritual Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- web fonts -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>
	<!-- header modal -->
<?php
include('connect.php');
include('login.php');
if(isset($_SESSION['mid'])&&isset($_SESSION['type'])){
	if($_SESSION['type']=="A"||$_SESSION['type']=='S'){
		}
		else{
			header("Location: index.php");
			}
	}else{
			header("Location: index.php");
			}
?>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu">                            <li><a href="products.php?category=game">Games</a></li>
								<li><a href="products.php?category=books">Books</a></li>
								<li><a href="products.php?category=Calender">Calenders</a></li>
<!-- <div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.html">Mobile Phones</a></li>
											<li><a href="products.html">Mp3 Players <span>New</span></a></li> 
											<li><a href="products.html">Popular Models</a></li>
											<li><a href="products.html">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.html">Laptop</a></li>
											<li><a href="products1.html">Desktop</a></li>
											<li><a href="products1.html">Wearables <span>New</span></a></li>
											<li><a href="products1.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.html">Tv</a></li>
											<li><a href="products2.html">Camera</a></li>
											<li><a href="products2.html">AC</a></li>
											<li><a href="products2.html">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div> -->
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li> 
						<!-- <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="codes.html">Short Codes</a></li>     
							</ul>
						</li>   -->
						<li><a href="mail.php">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Mail Us</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Mail Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- mail -->
	<div class="mail">
		<div class="container">

			<h3>Add Product</h3>

			<div class="agile_mail_grids">
				<div class="mcol-md-7 contact-left" >
					<form action="added_product.php"  method="post" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="Product Name" required><br>
                        <br><br>
						 <select style="width:32.63%;" name="seller">
                         <option value="x">SELLER</option>
<?php
	$se=mysql_query("select * from seller");
	while($data=mysql_fetch_array($se)){
?>
                         <option value="<?php echo $data['mid'];?>"><?php echo $data['organization'];?></option>

<?php		
	}					
?>						</select> 
                        <br><br>
                         <select style="width:32.63%;" name="Category">
                         <option value="game">Game</option>
						 <option value="books">Books</option>
						 <option value="Calender">Calender</option>
                         </select>
                         <br><br>
						<input style="width:32.63%;"  type="number" name="price" placeholder="Price" required><br>
                        <br>
                        <input style="width:32.63%;"  type="number" name="quantity" placeholder="Quantity" required><br>
                        <br>
						<input style="width:32.63%;" type="number" name="discount" placeholder="Discount in %" required><br>
                        <br>
                        <textarea name="info" style="width:32.63%;" placeholder="Information"></textarea>
                        <br>
                        <input type="file" name="image" id="files" class="hidden"/>
						<label for="files">Add Photos Of the Product</label>
                        <br><br>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
<?php
include("footer.php");
?>
</body>
</html>
