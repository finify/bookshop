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

 <!--  Page CSS-->	
<link href="assets/css/cashier.css" rel="stylesheet">

<style>

.bookdetail{
	width:100%;
	height:220px;
	background-color:#262626;
	position:fixed;
	z-index:2;
}
.booklist{
	width:100%;
	height:auto;
	background-color:#e2e2ab;
	margin-top:220px;
	position:absolute;
	z-index:1;
}
tr{
	font-size:19px;
}
#col{
	height:220px;
	text-align:left;
	color:white;
	border:solid 2px #d2d6e1;
	font-weight:bold;
	font-size:20px;
	letter-spacing:2px;
}
#col1{
	background-color:rgba(4, 40, 68, 0.85);
	height:40px;
	text-align:left;
}
#ms_row1{
	height:60px;
	text-align:left;
}
#ms_row2{
	margin-top:10px;
	height:60px;
	text-align:left;
}
tr:hover{
	cursor:pointer;
}


</style>
</head>

<body>

	<div class="bookdetail">
		<div class="container-fluid">
			<center>
			<div class="row">
				<div class="col-md-6" id="col">
					<label>DATE</label> <br>
					<div class="row">
							<div class="col-md-6" id="ms_row1">
								<div class="form-group">
									<input type="date" value="" placeholder="Input" class="form-control" style="margin-top:10px; font-size:30px;"/>
								</div>
							</div>
					</div>
					<label>The following record below shows all sales made on the date shown above</label> <br>
				</div>
				<div class="col-md-6" id="col">
					<label>DAY RECORD</label>
					<br>
					TOTAL COPIES SOLD:  200<br>
					AMOUNT MADE:  200000<br>
					<div class="row">
							<div class="col-md-12" id="ms_row2">
							<center>
							<button class="btn btn-primary btn-lg" style="margin-top:5px; ">Print Record</button>
							</center>
							</div>
					</div>
					<div class="row">
							<div class="col-md-12" id="ms_row2">
							<a href="adminhome.php"><button class="btn btn-primary btn-sm" style="margin-top:5px; float:right; ">Back To adminhome</button>
							</div>
							</a>
					</div>
				</div>
			</div>
			</center>
		</div>
	</div>
	<div class="booklist">
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                  


                    <div class="col-md-12">
                        <div class="card card-plain">
                           
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Bookname</th>
                                    	<th>Bookauthor</th>
                                    	<th>No sold</th>
                                    	<th>Date sold</th>
                                    	<th>Time Sold</th>
                                    </thead>
                                    <tbody>
                                        <tr id="bookrow">
                                        	<td>1</td>
                                        	<td>Dakota RiceDakota RiceDakota Rice</td>
                                        	<td>Dakota RiceDakota RiceDakota Rice</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        	<td>Gloucester</td>
                                        </tr>
										<tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        	<td>Gloucester</td>
                                        </tr>
										<tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        	<td>Gloucester</td>
                                        </tr>
										<tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        	<td>Gloucester</td>
                                        </tr>
										<tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
	</div>
	


</body>

</html>