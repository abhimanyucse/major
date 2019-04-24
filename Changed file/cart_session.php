<?php
session_start();
include("connect.php");
$exist=1;
if(isset($_SESSION['cart'])){
	$pid=$_REQUEST['pid'];
	
	foreach($_SESSION['cart'] as $key=>$value){
		if($_SESSION['cart'][$key]['productID']==$pid){
			$_SESSION['cart'][$key]['Quantity']++;
			print_r($_SESSION['cart']);
			$exist=0;
			break;
			}
		}
		if($exist)
			array_push($_SESSION['cart'],array('productID'=>$pid,'Quantity'=>1));
	}
	else{
		$_SESSION['cart']=array();
		$pid=$_REQUEST['pid'];
		array_push($_SESSION['cart'],array('productID'=>$pid,'Quantity'=>1));
		print_r($_SESSION['cart']);
		}
?>