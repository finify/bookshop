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
		background-color:rgba(2, 32, 54, 0.82);
		color:white;
	}
	b{
		font-size:30px;
	}
	a{
		color:white;
	}
	.content{
		margin-top:70px;
	}
	.space{
		margin-top:250px;
	}
	
	</style>
</head>

<body>
	<center>
	<div class="content">
            <div class="container-fluid">
				<div class="row">
							<div class="col-md-12" id="ms_row2">
							<center>
							<a href="logout.php"><button class="btn btn-primary btn-lg" style="margin-top:5px; ">LOG OUT</button>
							</a>
							</center>
							</div>
				</div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
						<a href="create.php"><img src="assets/img/create.png" width="200px" height="200px" title="CREATE NEW BOOK "/> <br>
						<b id="header">CREATE NEW BOOK </b> </a>
					</div>
					<div class="col-lg-6 col-sm-6">
						<a href="manage.php"><img src="assets/img/manage.png" width="200px" height="200px" title="MANAGE BOOKS"/> <br>
						<b id="header">MANAGE BOOKS </b></a>
					</div>
					<div class="space">
					</div>
					<div class="col-lg-6 col-sm-6">
						<a href="daily.php"><img src="assets/img/dailyrec.png" width="200px" height="200px" title="DAILY RECORD"/> <br>
						<b id="header">DAILY RECORD </b></a>
					</div>
					<div class="col-lg-6 col-sm-6">
						<a href="users.php"><img src="assets/img/user.png" width="200px" height="200px" title="MANAGE USERS"/> <br>
						<b id="header">MANAGE USERS</b></a>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<footer><a target="blank" href="#">A FINIFY PRODUCTION</a></footer>
	</div>
	</center>








</body>
</html>