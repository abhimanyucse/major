<?php
$addr=$_POST['addr'];
$phone=$_POST['phone'];
$name=$_POST['name'];	
$zip=$_POST['zip'];
$date=date('y-m-d');
session_start();
include "connect.php";
foreach($_SESSION['cart'] as $key=>$value){
	$pid= $_SESSION['cart'][$key]['productID'];
	$qty= $_SESSION['cart'][$key]['Quantity'];
	$se=mysql_query("select * from products where pid='$pid'");
	if($se!=false){
	$info=mysql_fetch_array($se);
	mysql_query("insert into transaction set mid='".$_SESSION['mid']."',pid='".$info['pid']."',quantity='".$qty."',address='".$addr."',zipcode='$zip',name='$name',phone='$phone',date='$date'");
	$info["quantity"]=$info["quantity"]-$qty;
	mysql_query("update products set quantity=".$info['quantity']." where pid='$pid'");
	header("Location: orders.php");	
		}
	}
?>
