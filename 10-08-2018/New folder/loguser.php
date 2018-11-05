<?php
session_start();//start the PHP_Session
//function


$username= "bodrul";
$pw= "bodrul";

if($_POST['username']==$username && $_POST[pw]==$pw){
	$_SESSION['username']=$username;
	header("location:home.php");
}
else{
	echo "Wrong username and password";
	echo "<a hre='index.php'>Go Back</a>"
}
?>