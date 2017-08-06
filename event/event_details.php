<?php
include("connect.php");
session_start();
echo $author;
?>
<!DOCTYPE html>
<html>
<head>
<style>
	.formoid-solid-green {
		background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px;
	}
</style>
	<meta charset="utf-8" />
	<title>Event Details - Formoid jquery form validation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<?php
if(isset($_POST['submit'])){
	$stmt =$mysqli->prepare("INSERT INTO post (post_author, post_description, post_time, post_start, post_end) VALUES(?, ?, ?, ?, ?)");
	$rc = $stmt->bind_param('sssss', $author, $description, $time, $start, $end);
	$author= $_SESSION['user_id'];
	$description= $_POST['post_description'];
	$time =$_POST['post_time'];
	$start=$_POST['post_start'];
	$end=$_POST['post_end'];




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

echo' 




<!-- Start Formoid form-->
<link rel="stylesheet" href="event_details_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="event_details_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-green" method="post"><div class="title"><h2>Event Details</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="post_description" required="required" placeholder="Event title"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="post_description" required="required" placeholder="Location"/><span class="icon-place"></span></div></div>
	<div class="element-date"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="post_start" required="required" placeholder="Date starts"/><span class="icon-place"></span></div></div>
	<div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="post_time" required="required" placeholder="Time" value=""/><span class="icon-place"></span></div></div>
	<div class="element-date"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="post_end" placeholder="Date Ends"/><span class="icon-place"></span></div></div>
	<div class="element-file"><label class="title"></label><div class="item-cont"><label class="large" ><div class="button">Choose File</div><input type="file" class="file_input" name="file" /><div class="file_text">Choose an event image</div><span class="icon-place"></span></label></div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="post_description" cols="20" rows="5" required="required" placeholder="Event description"></textarea><span class="icon-place"></span></div></div>
	
	<div class="element-radio"><label class="title">Create tickets</label>		<div class="column column1"><label><input type="radio" name="post_description" value="Free ticket" /><span>Free ticket</span></label><label><input type="radio" name="radio" value="Paid ticket" /><span>Paid ticket</span></label><label><input type="radio" name="radio" value="Donation" /><span>Donation</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="post_description" placeholder="Price of ticket" value=""/><span class="icon-place"></span></div></div>
	<span class="icon-place"></span></div></div></div>
<div class="submit"><input type="submit" name="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">jquery form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="event_details_files/formoid1/formoid-solid-green.js"></script>
<!-- Stop Formoid form-->
';
}
?>

</body>
</html>

