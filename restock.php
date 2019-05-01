<?php
include "connect.php";
$quant=$_REQUEST['quant'];
$pid=$_REQUEST['id'];
mysql_query("update products set quantity='$quant' where pid='$pid'") or die("Error");
echo "Successful Restock";
?>