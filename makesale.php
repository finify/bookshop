<?php
require('connect.php');

// Retrieve data from Query String

// Escape User Input to help prevent SQL Injection
$bookno = $_GET['bookno'];
$bookname = $_GET['bname1'];

$bookno = stripslashes($bookno);	
$bookno = mysqli_real_escape_string($con,$bookno);	

$bookname = stripslashes($bookname);	
$bookname = mysqli_real_escape_string($con,$bookname);	


$query1 = "SELECT * FROM `bookdetail` WHERE Bookname='$bookname'";
$result = mysqli_query($con,$query1) ;
$row = mysqli_fetch_array($result);
$bookcopies= $row['Copies'];
$booknosold= $row['Nosold'];
$bookamountsold= $row['Amountsold'];
$bookamount= $row['Amount'];
$booknoremain= $row['Noremain'];

$booknosold+=$bookno;
$bookamountsold +=$bookamount*$bookno;
$booknoremain=$booknoremain-$bookno;
	
$query2 = "UPDATE `bookdetail`
	SET Nosold='$booknosold',Amountsold='$bookamountsold',Noremain='$booknoremain'
	WHERE Bookname='$bookname' " ;						
	$result2 = mysqli_query($con,$query2);
if($result2){
	$display_string = $bookno ." Book Sold";
	echo $display_string ;
}

?>