<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
				include "../connect.php";
				session_start();

		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
	foreach($_SESSION['cart'] as $key=>$value){
	$pid= $_SESSION['cart'][$key]['productID'];
	$qty= $_SESSION['cart'][$key]['Quantity'];
				$se=mysql_query("select * from products where pid='$pid'");
				$info=mysql_fetch_array($se);
				mysql_query("update transaction set transaction_id='".$_POST['TXNID']."' where orderid='".$_POST['ORDERID']."' and mid='".$_SESSION['mid']."' and pid='$pid'");
								}
				$info["quantity"]=$info["quantity"]-$qty;
				mysql_query("update products set quantity=".$info['quantity']." where pid='$pid'");
				header("Refresh:5; url=../orders.php");

						}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>