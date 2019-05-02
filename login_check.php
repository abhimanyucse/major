<?php
include "connect.php";
$email=$_POST['email'];
$pass=$_POST['pass'];
$se=mysql_query("select * from master where username='$email' and password='$pass' and status='A' and verify='T'");
if($info=mysql_fetch_array($se)){
	session_start();
	$_SESSION['mid']=$info['mid'];
	$_SESSION['type']=$info['type'];
	echo "Success";
	 	}
	else{
		echo "AUTH ERROR";
		}
?>