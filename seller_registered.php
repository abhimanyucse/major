<?php
include "connect.php";
$name=$_POST['name'];
$org=$_POST['org'];
$addr=$_POST['addr'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$insert_master=mysql_query("insert into master set username='$email',password='$name',type='S'") or die("insertion problem");
$uid=mysql_insert_id();
$insert=mysql_query("insert into seller set name='$name',organization='$org',address='$addr',email='$email',phone='$phone',mid='$uid'") or die("cannot insert");
echo "Registration Successful";
?>