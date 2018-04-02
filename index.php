<!--FOR BOOKSHOP 
CODED BY:FIN;;;;;;;;;;;;;;;;;;;;;;
A FINIFY PRODUCTION;;;;;;;;;;;;;;;;;;;;;;
-->

<?php
session_start();
if(isset($_SESSION["email"])){
header("Location: ../home");
exit(); }
if(isset($_SESSION["adminemail"])){
header("Location: ../admin");
exit(); }
require('connect.php');
$error ="";
?>


		
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BOOKSHOP SOLUTION</title>
<link href="assets/img/bookshop1.png" rel="icon" type="image/png">	
<link href="assets/css/indexstyle.css" rel="stylesheet">

</head>

<?php


if (isset($_POST['user']))
{
	$user = stripslashes($_REQUEST['user']);	
	$user = mysqli_real_escape_string($con,$user);	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$query = "SELECT * FROM `bookshopuser` WHERE username='$user'
	and password='$password'";						//for user

	$result = mysqli_query($con,$query) ;
	$rows = mysqli_num_rows($result) ;
         if($rows==1)
		{
		$row = mysqli_fetch_array($result);
		$userposition=$row['position'];
		
		if ($userposition=="ADMIN"){
			$_SESSION['admin'] = $user;
            // Redirect user to index.php
	    header("Location:adminhome.php");
			
		}elseif($userposition=="CASHIER"){
			$_SESSION['user'] = $user;
	    header("Location:cashier.php");
			
		}else{}
	
		}else{
			$error = "Wrong username and password combination"; 
			 
		 } 
}
		 
?>		 
<body>
	<div class="wrapper">
		
		<center>
			<img src="assets/img/bookshop1.png" width="200px" height="150px" title="BOOKSHOP SOLUTION"/> <br>
			<b id="header">BOOKSHOP SOLUTION </b>
		</center>

		<form class="login" METHOD="POST" >
			<p class="title"> <?php echo $error ?> </p>
			<p class="title">Log in</p>
			USER
			<input type="text" placeholder="Username" id="user" name="user" autofocus/>
			PASSWORD
			<input type="password" placeholder="Password" id="pass" name="password"/>
			<i class="fa fa-key"></i>
			
			<input type="submit" id="button" value="Log in" name="login"/>
		</form>
 
		<footer><a target="blank" href="#">A FINIFY PRODUCTION</a></footer>
	</div>
</body>

</html>




