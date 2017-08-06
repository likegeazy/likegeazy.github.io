<?php  
include("connect.php");  
session_start();//session starts here  

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { 
echo '<script type="text/javascript">window.location.href="index.php";</script>'; 
} 
?>  

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css1/animate.css">
	<link rel="stylesheet" href="css1/style.css">


	<!-- Modernizr JS -->
	<script src="js1/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-3">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					


<?php 

if(isset($_POST['login'])){ 
$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? and password= ?"); 
$rc= $stmt->bind_param('ss', $login, $password); 

$login = $_POST['username']; 
$password = $_POST['password']; 
$id = "";
$email="";
$lvl = "";
if(false===$rc){ 

die('bind_param () has failed'); 
} 

$rc= $stmt->execute(); 
if(false===$rc){ 
echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error; 
echo '<br>'; 
die('execute() has failed '); 
} 
$stmt->bind_result($id, $login, $password, $email, $level);
$stmt->store_result(); 
if($stmt->num_rows == 1) 
{ 
if($stmt->fetch() == true) 
{ 
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $id; 
$_SESSION['username'] = $login; 
$_SESSION['level'] = $lvl; 
echo '<script type="text/javascript">window.location.href="index.php";</script>'; 
} 
else {echo 'Fetch failed'; } 
} 
else { 
echo 'INVALID LOGIN/PASSWORD COMBINATION!'; 
} 

$stmt->close(); 

} 
else 
{ echo 
'
					<!-- Start Sign In Form -->
					<form method="POST" action="" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
						<h2>Sign In</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input name="username" type="text" class="form-control" id="username" placeholder="Username" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p>Not registered? <a href="sign-up3.php">Sign Up</a> | <a href="forgot3.html">Forgot Password?</a></p>
						</div>
						<div class="form-group">
							<input name="login" type="submit" value="Sign In" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. Designed by Dias Aidarkhan</small></p></div>
			</div>
		</div>
	
	<!-- jQuery -->
	<script src="js1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js1/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="js1/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js1/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js1/main.js"></script>

	</body>
</html>';
}
?>
  

  