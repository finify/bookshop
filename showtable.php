<?php
require('connect.php');


$query1 = "SELECT * FROM `bookdetail`";
$id = "1";
$result=mysqli_query($con,$query1);

echo " 
	   <table class='table table-hover' id='table'>
	   <thead>
	   <th>ID</th>
       <th>Bookname</th>
       <th>Bookauthor</th>
       <th>Amount</th>
       <th>No Remaining</th>
       </thead>
	   <tbody>
	   ";
 while($row=mysqli_fetch_array($result))
 {
	 
	 echo "<tr>";
     echo "<td >".$id++."</td>";
     echo "<td>".$row['Bookname']."</td>";
     echo "<td>". $row['Author']."</td>";
     echo "<td>".$row['Amount']."</td>";
     echo "<td>".$row['Noremain']."</td>";
     echo "</tr>";
	 
 }
 echo "
	  </tbody>
      </table>";
 
 ?>