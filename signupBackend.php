<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

 	 	 	
$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$emailid = mysqli_real_escape_string($conn,$_POST['emailid']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$aboutyourself = mysqli_real_escape_string($conn,$_POST['aboutyourself']);
$sql = "insert into initlogin (firstname,lastname,emailid,password,aboutyourself) values ('$firstname', '$lastname', '$emailid','$password', '$aboutyourself');";
mysqli_query($conn,$sql); 
header("Location: yourInfo.php"); 
?>


