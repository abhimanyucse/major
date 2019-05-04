<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form>
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" id="email_l" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pass_l" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" id="login" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $("#login").click(function(){
										 var email_l=$("#email_l").val();
										 var pass_l=$("#pass_l").val();										 
										 var stri="";	
										 var data="email="+email_l+"&pass="+pass_l;
														 $.ajax({
															 url: "login_check.php",
															 type:'POST',
															 data:data,
															 success: function(mess){
																 if(mess=="Success"){
																	 //alert("login Successful");
																	 window.location.replace("admin_portal.php");
																	 }
																	 else{
																		 alert(mess);
																		 }
																 }
															 });									 
														 
										});
    });
</script>
</body>
</html>  