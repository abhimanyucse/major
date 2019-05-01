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
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
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
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<?php
include("connect.php");
include('login.php');
?>
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
                        <?php
                        if(isset($_SESSION['mid'])&&isset($_SESSION['type'])){
						?>
							<li><a href="logout.php" class="act">Logout</a></li>	
                        <?php
						}
						?>
					</ul>
				</div>
			</nav>
		</div>
	</div>

    <!-- Profile Section -->
    <section>
        <?php 
            if(isset($_SESSION["mid"]) && isset($_SESSION["type"]) == "customer"){
                $custId = $_SESSION["mid"];
                $query = mysql_query("select * from customer where mid=$custId");
                while($data=mysql_fetch_array($query)){
                    ?>
                        <div class="container" style="padding:20px;text-align:center">
                            <h1>Profile</h1>
                            <hr />
                            <div class="row" style="padding:10px;">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
                                    <div class="well well-sm" style="box-shadow:2px 2px #888888">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-6 col-lg-7">
                                                <img src="images/profile.png" alt="" class="img-rounded img-responsive" />
                                            </div>
                                            <div class="col-sm-8 col-md-6 col-lg-5">
                                                <h3><strong><?php echo $data["name"]; ?></strong></h3>
                                                <hr />
                                                <div>
                                                    <i class="glyphicon glyphicon-envelope"></i> <?php echo $data["email"]; ?>
                                                    <br />
                                                    <i class="glyphicon glyphicon-phone"></i> <?php echo $data["phone"]; ?>
                                                </div>
                                                <hr />
                                                <div>
                                                    <a href="orders.php"><button class="btn btn-primary btn-block">View past orders</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
    </section>
</body>

</html>