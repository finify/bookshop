<!--FOR BOOKSHOP 
CODED BY:FIN;;;;;;;;;;;;;;;;;;;;;;
A FINIFY PRODUCTION;;;;;;;;;;;;;;;;;;;;;;
-->
<?php
session_start();
if(!isset($_SESSION["admin"])){
header("Location: index.php");
exit(); }
?>
<?php
require('connect.php');
?>
<?php
$output ="";
if (isset($_POST['bookname']))
{
	$bookname = stripslashes($_REQUEST['bookname']);	
	$bookname = mysqli_real_escape_string($con,$bookname);
	$bookauthor = stripslashes($_REQUEST['bookauthor']);	
	$bookauthor = mysqli_real_escape_string($con,$bookauthor);
	$bookamount = stripslashes($_REQUEST['bookamount']);	
	$bookamount = mysqli_real_escape_string($con,$bookamount);
	$bookcopies = stripslashes($_REQUEST['copies']);	
	$bookcopies = mysqli_real_escape_string($con,$bookcopies);
	
	//calculationzzz
	$totalamount= $bookamount * $bookcopies;
	
	$sql = "INSERT INTO bookdetail (Bookname,Author,Amount,Copies,Totalamount,Nosold,Amountsold,Noremain)VALUES ('$bookname','$bookauthor','$bookamount','$bookcopies','$totalamount','0','0','$bookcopies') " ;
	$result= mysqli_query($con, $sql) ;
	if($result){
		$output= "BOOK RECORD UPLOADED SUCCESSFULLY";
	}else{
		$output= "BOOK RECORD UPLOAD WAS UNSUCCESS";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BOOKSHOP SOLUTION</title>
<link href="assets/img/bookshop1.png" rel="icon" type="image/png">	


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	
	<style>
	body{
		padding:20px;
	}
	.wrapper{
		background-color:rgba(4, 40, 68, 0.85);
		width:100%;
		height:auto;
		padding:100px;
	}
	.input{
	background-color:transparent;
	width:100%;
	border:0px;
	color:white;
	font-weight:bold;
	font-size:20px;
	padding:10px;
	border-bottom:solid white 3px;
	}
	#title{
		font-size:20px;
		color:white;
	}
	#create-btn{
		margin-top:20px;
	}
	#Bookamount{
		width:50%;
	}
	#Noofcopies{
		width:50%;
	}
	#title{
		margin-top:10px;
	}
	</style>
<!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	

</head>

<body>
	<div class="wrapper">
		<a href="adminhome.php" ><button style="margin-bottom:20px;" class="btn btn-primary btn-lg"  id="create-btn">Back to Admin Home</button></a>
		
		<div class="alert alert-success" id="result" >
            <button type="button" aria-hidden="true" class="close">x </button>
            <span><b><?php echo $output;?> </b></span>
        </div>
		
		<center><p id="title" style="text-decoration:underline;">CREATE A NEW RECORD</p></center>
		<form METHOD="POST">
			<p id="title">Bookname</p>
			<input type="text" placeholder="Bookname" id="bookname" class="input" name="bookname" required/>
			<p id="title">Book Author</p>
			<input type="text" placeholder="Book author" id="Bookauthor"  class="input" name="bookauthor" required/>
			<p id="title">Book Amount</p>
			<input type="number" placeholder="Book amount" id="Bookamount" width="50%" class="input" name="bookamount" required/>
			<p id="title">No of copies</p>
			<input type="number" placeholder="No of copies" id="Noofcopies"  class="input" name="copies" required/>
			
			<center>
			<input class="btn btn-primary btn-lg"  id="create-btn" value="CREATE NEW RECORD" type="submit" onClick="showresult()"/>
			</center>
		</form>
		<br>
		<br>
		<br>
		<br>
		<center><footer><a target="blank" href="#">A FINIFY PRODUCTION</a></footer></center>
	</div>
</body>

</html>
