<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

 	 	 	
$emailid = mysqli_real_escape_string($conn,$_POST['emailid']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
// $sql = "insert into initlogin (firstname,lastname,emailid,password,aboutyourself) values ('$firstname', '$lastname', '$emailid','$password', '$aboutyourself');";
$sql = "select emailid,password from initlogin where emailid='$emailid' AND password='$password';";
$res = mysqli_query($conn,$sql);
// $t = mysqli_fetch_assoc($res);
if (mysqli_num_rows($res) > 0) {
	header("Location: yourInfo.php");
} else {
	$message = "wrong credentials. Try Again!!!";
	echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: signinSignup.php");
}
header("signinSignup.php");
// if (mysqli_query($conn,$sql)>0) {
// 	echo "working";
// 	header("Location: PerfectMatch.html");
// }
// else{
// 	echo "not working";
// }
?>

