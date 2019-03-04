<?php
include "connect.php";
$name=$_POST['name'];
$des=$_POST['des'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$insert_master=mysql_query("insert into master set username='$email',password='$name',type='A'") or die("insertion problem");
$uid=mysql_insert_id();
$insert=mysql_query("insert into admin set name='$name',Designation='$des',email='$email',phone='$phone',mid='$uid'") or die("cannot insert");
echo "Registration Successful";
?>