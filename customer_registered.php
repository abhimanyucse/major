<?php
    session_start();
  $connect = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("spiritual_project", $connect);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pass'];

    $query = "INSERT INTO master (username, password, type) VALUES ('$email', '$password', 'customer')";
      if(!mysql_query($query)){
        echo "Error " .mysql_error();
      }else{
          
        $_SESSION["userid"] = $email;
        echo 'Successfully Registered';
      }

?>