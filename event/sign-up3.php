<?php 
include("connect.php"); 
session_start(); 
?> 
<!DOCTYPE html> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--> 
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]--> 
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]--> 
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<title>Sign up</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Free HTML5 Template by FreeHTML5.co" /> 
<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" /> 
<meta name="author" content="FreeHTML5.co" /> 



<!--Facebook and Twitter integration--> 
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
<!--FOR IE9 below --> 
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
if(isset($_POST['register'])){ 
$stmt = $mysqli->prepare("INSERT INTO users (username, password, email, level) VALUES(?, ?, ?, ?)"); 
$rc= $stmt->bind_param('sssi', $login, $password, $email, $level); 
$login = $_POST['username']; 
$password = $_POST['password']; 
$email = $_POST['email']; 
$level = '0'; 



if(false===$rc){ 

die('bind_param () has failed'); 
} 

$rc= $stmt->execute(); 
if(false===$rc){ 
echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error; 
echo '<br>'; 
die('execute() has failed '); 
} 


$stmt->close(); 
$mysqli->close(); 
echo '<script type="text/javascript">window.location.href="index.php";</script>'; 

} 
else{ 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
echo "You are already logged in!"; 
} 

else { 
echo' 


<!— Start Sign In Form —> 
<form method="POST" action="" class="fh5co-form animate-box" data-animate-effect="fadeInRight"> 
<h2>Sign Up</h2> 

<div class="form-group"> 
<label for="name" class="sr-only">Name</label> 
<input name="username" type="text" class="form-control" id="name" placeholder="Name" autocomplete="off" required> 
</div> 
<div class="form-group"> 
<label for="email" class="sr-only">Email</label> 
<input name="email" type="email" class="form-control" id="email" placeholder="Email" autocomplete="off" required> 
</div> 
<div class="form-group"> 
<label for="password" class="sr-only">Password</label> 
<input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required> 
</div> 
<div class="form-group"> 
<label for="re-password" class="sr-only">Re-type Password</label>
<input type="password" class="form-control" id="re-password"
placeholder="Re-type Password" autocomplete="off" required> 
</div> 
<div class="form-group"> 
<label for="remember"><input type="checkbox" id="remember"> Remember Me</label> 
</div> 
<div class="form-group"> 
<p>Already registered? <a href="index3.php">Sign In</a></p> 
</div> 
<div class="form-group"> 
<input name="register" type="submit" value="Sign Up" class="btn btn-primary"> 
</div> 
</form> 
<!— END Sign Up Form —> 


</div> 
</div> 
<div class="row" style="padding-top: 60px; clear: both;"> 
<div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. Designed by Dias Aidarkhan</small></p></div> 
</div> 
</div> 

<!— jQuery —> 
<script src="js1/jquery.min.js"></script> 
<!— Bootstrap —> 
<script src="js1/bootstrap.min.js"></script> 
<!— Placeholder —> 
<script src="js1/jquery.placeholder.min.js"></script> 
<!— Waypoints —> 
<script src="js1/jquery.waypoints.min.js"></script> 
<!— Main JS —> 
<script src="js1/main.js"></script> 

</body> 
</html>'; 
} 
} 
?>
