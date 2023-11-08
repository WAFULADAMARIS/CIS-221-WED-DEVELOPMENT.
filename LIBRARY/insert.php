<!doctype html>
<html>
 <head>
 <h1>insert data into our table
 </head>
<body>
 <center>
 <?php
 require "dbconnect.php";
 $fullnames = $_REQUEST['full_names']; 
 $idnumber = $_REQUEST['ID_Number'] ; 
 $gender = $_REQUEST['gender'];
 $address = $_REQUEST['address'] ;
 $sql = "insert into staff values('$firstname', '$lastname', '$gender', '$address')"; 
 if($conn -> query($sql) === true) {
 echo " records inserted" ;
 }else {
 echo "error";
 }
 ?>
 </center>
 </body>
</html>