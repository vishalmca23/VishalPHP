<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Basic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="js/jquery.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
</head>
<body>
	<h1>Login Form</h1>
	<div class="main-agile">
		
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<form action="" method="post">
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="username" placeholder="Username" required=""/>
								</div>
								<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="password" placeholder="Password" required=""/>
								</div>
									<input type="submit" name="submit" value="LOGIN">
								</form>
		</div>
		<div>
			<span>Already have an account, <a href="Reg.php">Click for Signup</a></span>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
	   define('DB_SERVER', 'localhost');
	   define('DB_USERNAME', 'root');
	   define('DB_PASSWORD', '');
	   define('DB_DATABASE', 'test');
	   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	   session_start();
	   
	   if($_SERVER["REQUEST_METHOD"] == "POST") {
		  // username and password sent from form 
		  
		  $myusername = mysqli_real_escape_string($db,$_POST['username']);
		  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
		  
		  $sql = "SELECT Email FROM user WHERE Email = '$myusername' and pass = '$mypassword'";
		  $result = mysqli_query($db,$sql);
		  //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  
		  $count = mysqli_num_rows($result);
		  
		  // If result matched $myusername and $mypassword, table row must be 1 row
			
		  if($count == 1) {
			// session_register("myusername");
			 $_SESSION['login_user'] = $myusername;
			 	
				header("location: ../index2.html");
				
				
		  }else {
			 $error = "Your Username or Password is invalid";
			 echo $error;
		  }
	   }
	}
?>