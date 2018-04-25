<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

$preferredgender = mysqli_real_escape_string($conn,$_POST['preferredgender']);
$agerangeform = mysqli_real_escape_string($conn,$_POST['agerangeform']);
$agerangeto = mysqli_real_escape_string($conn,$_POST['agerangeto']);
$interestedreligion = mysqli_real_escape_string($conn,$_POST['interestedreligion']);
$skincolor = mysqli_real_escape_string($conn,$_POST['skincolor']);

$ffeet = mysqli_real_escape_string($conn,$_POST['ffeet']);
$finch = mysqli_real_escape_string($conn,$_POST['finch']);

$tfeet = mysqli_real_escape_string($conn,$_POST['tfeet']);
$tinch = mysqli_real_escape_string($conn,$_POST['tinch']);

$places = mysqli_real_escape_string($conn,$_POST['places']);
$education = mysqli_real_escape_string($conn,$_POST['education']);

$heightrangefrom = $ffeet." ft ".$finch." inch";
$heightrangeto = $tfeet." ft ".$tinch." inch";

$sql = "insert into userrecommendation (preferredgender,agerangeform,agerangeto,interestedreligion,skincolor,heightrangefrom,heightrangeto,places,education) values ('$preferredgender','$agerangeform','$agerangeto','$interestedreligion','$skincolor','$heightrangefrom','$heightrangeto','$places','$education');";
mysqli_query($conn,$sql);  
header("Location: home.php");
?>


