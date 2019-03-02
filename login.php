	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" >
							<div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
													<input name="Email" id="email_l" placeholder="Email Address" type="text" required>
													<input name="Password" id="pass_l" placeholder="Password" type="password" required>
													<div class="sign-up">
														<input id="login" type="submit" value="Sign in"/>
													</div>
											</div>
										</div>
									</div>
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
													<input placeholder="Name" name="Name" id="name_r" type="text" required>
													<input placeholder="Email Address" id="email_r" name="Email" type="email" required>
													<input placeholder="Password" id="pass_r" name="Password" type="password" required>
													<input placeholder="Confirm Password" id="cpass_r" name="Password" type="password" required>
													<div class="sign-up">
														<input type="submit" id="register" value="Create Account"/>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
									$("#register").click(function(){
										 var name_r=$("#name_r").val();
										 var email_r=$("#email_r").val();
										 var pass_r=$("#pass_r").val();										 
										 var cpass_r=$("#cpass_r").val();
										 var stri="";	
										 var data="name="+name+"&email="+email_r+"&pass="+pass_r+"&cpass="+cpass;
										 if(name_r==""){
											 stri="Name ";
											 }
											 if(email_r==""){
												 stri+="Email ";
												 }
												 if(pass_r==""){
													 stri+="Password ";
													 }
													 if(cpass_r==""){
														 stri+="Confirm Password ";
														 }
														 if(stri.length!=0)
														 alert(stri+"Empty");
														 else{
														 $.ajax({
															 url: "customer_registered.php",
															 type:'POST',
															 data:data,
															 success: function(mess){
																 if(mess=="Success"){
																	 alert("Registration Successful");
																	 }
																	 else{
																		 alert(mess);
																		 }
																 }
															 });									 
														 }
										});
									$("#login").click(function(){
										 var email_l=$("#email_l").val();
										 var pass_l=$("#pass_l").val();										 
										 var stri="";	
										 var data="email="+email_l+"&pass="+pass_l;
										 	 if(email_l==""){
												 stri+="Email ";
												 }
												 if(pass_l==""){
													 stri+="Password ";
													 }
													 if(cpass_r==""){
														 stri+="Confirm Password ";
														 }
														 if(stri.length!=0)
														 alert(stri+"Empty");
														 else{
														 $.ajax({
															 url: "login_check.php",
															 type:'POST',
															 data:data,
															 success: function(mess){
																 if(mess=="Success"){
																	 alert("login Successful");
																	 }
																	 else{
																		 alert(mess);
																		 }
																 }
															 });									 
														 }
										});

								});
							</script>
						</div>
						<!-- <div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div> 

	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">Spiritual Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>