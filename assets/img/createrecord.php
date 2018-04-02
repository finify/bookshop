<!DOCTYPE html>
<html>
<head>
<tittle>
</tittle>
<style>

      
body {height:100%;}

* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 95%;
  padding: 20px;
  background: #fff;
  z-index:0;
  position:absolute;
  margin-top:100px;
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 600px;
  background:#efeee5;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 0px 5px 5px white;
  text-align:center;
  color:black;
  font-size:20px;
  z-index:0;
}


.login.ok #button {
  background-color: #8bc34a;
}

.login input {
  display: block;
  padding: 10px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: black;
  
}

 #amount{
display: block;
  padding: 10px 10px;
  margin-bottom: 10px;
  width: 200px;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: black;
  margin-left:32%;
}

#copies{
display: block;
  padding: 10px 10px;
  margin-bottom: 10px;
  width: 200px;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: black;
  margin-left:32%;
}




.login .title {
  color: black;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
  text-align:center;
}
.login #button {
  width: 100%;
  height: 60%;
  padding: 5px 5px;
  background: #1f2930;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 45px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
  border-color:#0a3d46;
}
.login,#button:hover
{
cursor:pointer;
border-bottom-width: 10px;
}

.nameerror {color:red;}
</style>

<script>




</script>
</head>




<body>
<?php 
if(isset($_POST['submit'])) {

$dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = ''; 
   $db ='bookshop';

   $con=mysqli_connect($dbhost,$dbuser,$dbpass,$db) ;
   
   $bookname = $_POST['bookname'] ;
   $author = $_POST['author'] ;
   $amount = $_POST['amount'] ;
   $copies = $_POST['copies'] ;
   $totalamount = $amount * $copies ;
   $nosold = '0';
   $amountsold = '0';
   $noremain = $copies;
   $nameerror = "";
   
   
   $sql =  "INSERT INTO table1 ".
   "(Bookname,Author,Amount,Copies,Totalamount,Nosold,Amountsold,Noremain)".
   "values". 
   "('$bookname','$author','$amount','$copies','$totalamount','$nosold','$amountsold','$noremain')";
if (empty($bookname)){
	$nameerror = "**input a bookname";
}
else {
$query =mysqli_query($con,$sql) ;

}
if (empty( $author)){
	$authorerror = "**input an author's name";
}
else {
$query =mysqli_query($con,$sql) ;

}
}




?>	
<div class="wrapper">
  <form class="login" METHOD="POST" ACTION="createrecord.php" >
    <p class="title">Create a new book record</p>
	
	BOOK NAME
    <input type="text" placeholder="bookname" id="user" name="bookname" autofocus/>
	<span class="nameerror"><?php echo $nameerror; ?></span> <br>
	AUTHOR
    <input type="text" placeholder="author" id="user" name="author" autofocus/>
    <span class="nameerror"><?php echo $authorerror; ?></span> <br>
	AMOUNT
    <input type="NUMBER" placeholder="Amount" id="amount" name="amount" autofocus/>
	
	NO OF COPIES
    <input type="number" placeholder="Username" id="copies" name="copies" autofocus/>
	
    
    <input type="submit" name="submit" class="submit" id="button" value="CREATE RECORD" />
  </form>
 
</div>



</body>



</html>

