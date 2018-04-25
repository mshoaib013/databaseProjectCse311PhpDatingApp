<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$age = mysqli_real_escape_string($conn,$_POST['age']);

$religion = mysqli_real_escape_string($conn,$_POST['religion']);
$skincolor = mysqli_real_escape_string($conn,$_POST['skincolor']);

$feet = mysqli_real_escape_string($conn,$_POST['feet']);
$inch = mysqli_real_escape_string($conn,$_POST['inch']);

$location = mysqli_real_escape_string($conn,$_POST['location']);
$education = mysqli_real_escape_string($conn,$_POST['education']);
$photo = mysqli_real_escape_string($conn,$_POST['photo']);
$time = date("h:i:sa");
$filedestination = 'img/'.$photo;
move_uploaded_file($photo,$filedestination);

$height= $feet." ft ".$inch." inch";

$sql = "insert into userinfo (gender,age,religion,skincolor,height,location,education,photo,time) values ('$gender','$age','$religion','$skincolor','$height','$location','$education','$photo','$time');";
mysqli_query($conn,$sql);  
header("Location: completeyourprofile.php");
?>


