<?php
require('auth.php');
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
    
    <link href="assets/css/themify-icons.css" rel="stylesheet">

	<!--  Page CSS-->	
	<link href="assets/css/cashier.css" rel="stylesheet">
	
	 <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


<style>

.bookdetail{
	width:100%;
	height:260px;
	background-color:#0a6561;
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
	padding:0px;
}
#col1{
	background-color:rgb(38, 112, 170);
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
label{
background-color:#262626;
width:100%;
text-align:center;
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





//////////////////////AJAX search script///////////////////////////////////
function show(){
var usertext = document.getElementById('input1').value;
var showtext = document.getElementById('test');

showtext.innerHTML =usertext;

}
//////////////////////AJAX search script///////////////////////////////////




//////////////////////AJAX SHOW BOOK DETAIL1///////////////////////////////////
function detail1(){
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
 var ajaxDisplay = document.getElementById('bookdetail1');
 ajaxDisplay.innerHTML = ajaxRequest.responseText;
 }
}
// Create a function that will receive data
// sent from the server and will update
// div section in the same page.
// Now get the value from user and pass it to
// server script.
var bookname = document.getElementById('bname1').value;
var queryString = "?bookname=" + bookname ;
ajaxRequest.open("GET", "selectbook1.php" + queryString, true);
ajaxRequest.send();
}
//////////////////////AJAX SHOW BOOK DETAIL1///////////////////////////////////


//////////////////////AJAX SHOW BOOK DETAIL2///////////////////////////////////
function detail2(){
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
 var ajaxDisplay = document.getElementById('bookdetail2');
 ajaxDisplay.innerHTML = ajaxRequest.responseText;
 }
}
// Create a function that will receive data
// sent from the server and will update
// div section in the same page.
// Now get the value from user and pass it to
// server script.
var bookname = document.getElementById('bname1').value;
var queryString = "?bookname=" + bookname ;
ajaxRequest.open("GET", "selectbook2.php" + queryString, true);
ajaxRequest.send();
}
//////////////////////AJAX SHOW BOOK DETAIL1///////////////////////////////////







//////////////////////AJAX FUNCTION TO MAKE SALE/////////////////////////////////
function ajaxFunction(){

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
 
 alert(ajaxRequest.responseText);
 showdb();
 detail1();
 detail2();
 }
}
// Create a function that will receive data
// sent from the server and will update
// div section in the same page.

// Now get the value from user and pass it to
// server script.
var bookno = document.getElementById('bookno').value;
var bname1 = document.getElementById('bname1').value;

var queryString = "?bookno=" + bookno ;
queryString += "&bname1=" + bname1;


ajaxRequest.open("GET", "makesale.php" + queryString, true);

ajaxRequest.send();

}
//////////////////////AJAX FUNCTION TO MAKE SALE/////////////////////////////////

</script>



</head>

<body onload="showdb()">
	<div class="bookdetail">
		
		<div class="container-fluid">
			<center>
			<div class="row">
				<div class="col-md-6" id="col">
					<label>BOOK DETAIL</label>
					<br>
					<div id='bookdetail1'>
					<!-- SHOW THE AJAX BOOK DETAIL1-->
					</div>
					<input type="hidden" name="bname1" id="bname1" style="color:black;"/>
					
					 <div id="test" style="color:red"></div>
				</div>
				<div class="col-md-6" id="col">
					<label>MAKE A SALE</label>
						<div class="row">
							<div class="col-md-4" id="ms_row1">
								<button class="btn btn-primary btn-md" style="margin-top:5px; ">MAKE ONE SALE</button>
							</div>
							<div class="col-md-6" id="ms_row1">
								<div class="form-group">
									<input type="text"  id="bookno" placeholder="Input" class="form-control" style="margin-top:5px;" required />
								</div>
							</div>
							<div class="col-md-2" id="ms_row1">
							<input type="submit" class="btn btn-primary btn-md" style="margin-top:5px;" value="SELL" onclick="ajaxFunction()"/>
							</div>
						</div>
					<label>MORE BOOK DETAILS</label>
					<div id="bookdetail2">
					<!-- SHOW THE AJAX BOOK DETAIL2-->
					</div>
				</div>
			</div>
			</center>
			<div class="row">
				<div class="col-md-12" id="col1" >				
						<div class="row">
							<div class="col-md-4" id="col1" >
					<form>
								<div class="form-group">
									<input type="text" value="" id="input1" placeholder="Search" class="form-control" style=" font-size:20px;border-radius:20px;" autofocus oninput="show()"/>
									
								</div>
							</div>
							
					</form>
							<div class="col-md-8" id="col1" >
								<a href="logout.php"><button class="btn btn-primary btn-fill btn-sm" style="float:right; margin-top:2px;">log out</button>
								</a>
							</div>
						</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="booklist" >
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                           
                            <div class="content table-responsive table-full-width" id="tableshow" onmouseover="startscript()" >
                                
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