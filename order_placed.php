<?php
session_start();
$addr=$_POST['addr'];
$phone=$_POST['phone'];
$name=$_POST['name'];	
$zip=$_POST['zip'];
$date=date('y-m-d');
$total=0;
include "connect.php";
foreach($_SESSION['cart'] as $key=>$value){
	$pid= $_SESSION['cart'][$key]['productID'];
	$qty= $_SESSION['cart'][$key]['Quantity'];
	$se=mysql_query("select * from products where pid='$pid'");
	if($se!=false){
	$info=mysql_fetch_array($se);
	$total+=$qty*$info['price']*(100-$info['discount'])/100;
	?>
		<form method="post" action="Paytm/pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  $orderid="ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['mid']?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $total?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>

	<?php
	mysql_query("insert into transaction set mid='".$_SESSION['mid']."',pid='".$info['pid']."',quantity='".$qty."',address='".$addr."',zipcode='$zip',name='$name',phone='$phone',date='$date',orderid='".$orderid."'");
//	header("Location: orders.php");	
		}
	}
?>
