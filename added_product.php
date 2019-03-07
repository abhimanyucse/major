<?php
include("connect.php");
$name=$_POST['name'];
$price=$_POST['price'];
$quan=$_POST['quantity'];
$seller=$_POST['seller'];
$discount=$_POST['discount'];
$category=$_POST["Category"];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["image"]["name"]);
$extension = end($temp);
if ((($_FILES["image"]["type"] == "image/gif")
|| ($_FILES["image"]["type"] == "image/jpeg")
|| ($_FILES["image"]["type"] == "image/jpg")
|| ($_FILES["image"]["type"] == "image/pjpeg")
|| ($_FILES["image"]["type"] == "image/x-png")
|| ($_FILES["image"]["type"] == "image/png"))

&& in_array($extension, $allowedExts))
  {
  if ($_FILES["image"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
    }
  else
    {
    if (file_exists("products/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
	  
    else
      {
	  	$insert=mysql_query("insert into products set name='$name',price='$price',quantity='$quan',seller='$seller',discount='$discount',category='$category'") or die("cannot insert");
		$pid=mysql_insert_id();
		$photo=$pid.".".$extension;
		$_FILES["image"]["name"]=$photo;
		$update=mysql_query("update products set photo='$photo' where pid='$pid'");
echo "Insertion Successful";
      move_uploaded_file($_FILES["image"]["tmp_name"],"products/".$_FILES["image"]["name"]);
	   echo "Stored in: " .  $_FILES["image"]["name"] ;
	  ?>
<p>
  <?php  }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

