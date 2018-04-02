<?php
require('connect.php');

// Escape User Input to help prevent SQL Injection
$bookname = $_GET['bookname'];

$bookname = stripslashes($bookname);	
$bookname = mysqli_real_escape_string($con,$bookname);
$query1 = "SELECT * FROM `bookdetail` WHERE Bookname='$bookname'";
$result=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result);
$bookname = $row['Bookname'];
$Author = $row['Author'];
$Amount= $row['Amount'];

 echo "BOOK NAME: ".$bookname."<br><br>";
 echo "AUTHOR: ".$Author."<br><br>";
 echo "AMOUNT: ".$Amount."<br><br>";
					
				
?>