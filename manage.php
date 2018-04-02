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
//









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
	height:260px;
	background-color:#262626;
	position:fixed;
	z-index:2;
}
.booklist{
	width:100%;
	height:auto;
	background-color:#e2e2ab;
	margin-top:260px;
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

<script language="javascript" type="text/javascript">
////////////////FIRST SHOW TABLE ON DOCUMENT LOAD///////////////////////
function showdb(){
var ajaxRequest; // The variable that makes Ajax possible!
try{
 // Opera 8.0+, Firefox, Safari
 ajaxRequest = new XMLHttpRequest();
 
}catch (e){
 // Internet Explorer Browsers
 try{
 ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");

 }catch (e) {
 try{
 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
 }catch (e){
 // Something went wrong
 alert("Your browser broke!");
 return false;
 }
 }
}

ajaxRequest.onreadystatechange = function(){

 if(ajaxRequest.readyState == 4){
 
 var ajaxDisplay = document.getElementById('tableshow');
 ajaxDisplay.innerHTML = ajaxRequest.responseText;
 }
}
// Create a function that will receive data
// sent from the server and will update
// div section in the same page.
ajaxRequest.open("GET", "showtable.php", true);
ajaxRequest.send();

}
////////////////FIRST SHOW TABLE ON DOCUMENT LOAD///////////////////////

</script>


</head>

<body  onload="showdb()">

	<div class="bookdetail">
		<div class="container-fluid">
			<center>
			<div class="row">
				<div class="col-md-6" id="col">
					<label>BOOK DETAIL</label> <br>
					NAME:Dakota RiceDakota RiceDakota Rice<br>
					AUTHOR:Dakota RiceDakota <br>
					AMOUNT:1000<br>
					NO OF COPIES:50<br>
					NO SOLD:25<br>
					NO REMAINING:25<br>
				</div>
				<div class="col-md-6" id="col">
					<label>MANAGE BOOK</label>
					<form>
						<div class="row">
							<div class="col-md-6" id="ms_row1">
								<div class="form-group">
									<input type="text" value="" placeholder="ADD MORE BOOK" class="form-control" style="margin-top:10px;"/>
								</div>
							</div>
							<div class="col-md-6" id="ms_row1">
							<button class="btn btn-primary btn-lg" style="margin-top:5px;">ADD</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="ms_row2">
							<center>
							<button class="btn btn-primary btn-lg" style="margin-top:5px; ">DELETE</button>
							</center>
							</div>
						</div>
					</form>
				</div>
			</div>
			</center>
			<div class="row">
				<div class="col-md-12" id="col1" >
					<div class="row">
						<form>
							<div class="col-md-4" id="col1" >
								<div class="form-group">
									<input type="text" value="" placeholder="Input" class="form-control" style=" font-size:20px;border-radius:20px;"/>
								</div>
							</div>
							<div class="col-md-2" id="col1" >
								<button class="btn btn-primary">search</button>
							</div>
						</form>
							<div class="col-md-6" id="col1" >
								<a href="adminhome.php"><button class="btn btn-primary btn-fill btn-sm" style="float:right; margin-top:2px;">Back to Admin home</button>
								</a>
							</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="booklist">
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                  


                    <div class="col-md-12">
                        <div class="card card-plain">
                           <div class="content table-responsive table-full-width" id="tableshow" onmouseover="startscript()" >
                            <!--Table rows show up here--> 
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
	</div>
	


</body>
<script>
//////////////////////SELECT BOOK AJAX ONE///////////////////////////////
function startscript(){
var table =  document.getElementById('table'),rIndex;
for(var i = 1; i < table.rows.length; i++)
{
table.rows[i].onclick =  function()
	{
		rIndex = this.rowIndex;
		document.getElementById("bname1").value = this.cells[1].innerHTML;
		detail1();
		detail2();



	};
}
}
////////////////////// SELECT BOOK AJAX ONE///////////////////////////////
</script>	
</html>