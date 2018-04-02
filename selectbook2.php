<?php
require('connect.php');

// Escape User Input to help prevent SQL Injection
$bookname = $_GET['bookname'];

$bookname = stripslashes($bookname);	
$bookname = mysqli_real_escape_string($con,$bookname);

$query1 = "SELECT * FROM `bookdetail` WHERE Bookname='$bookname'";
$result=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result);
$Copies = $row['Copies'];
$Nosold = $row['Nosold'];
$Noremain= $row['Noremain'];

 echo "NO OF COPIES:".$Copies."<br>";
 echo "NO SOLD:".$Nosold."<br>";
 echo "NO REMAINING:".$Noremain."<br>";
			
?>