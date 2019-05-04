<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<style>
    body{
        overflow-x: hidden
    }
    .navbar{
        margin: 0
    }
    .sidebar_main{
        height: 100vh;
        display: flex;
        background-color: #222222;
        justify-content: center;
        padding: 0
    }
    .sidebar_main ul {
        width: 100%;
        text-align: center;
    }
    .sidelist{
        padding: 10px;
        margin: 10px 0;
    }
    .sidelist a{
        text-decoration: none;
        color: white
    }
    .sidelist a:hover{
        text-decoration: none;
        color: grey
    }
    .row{
        margin-top: 50px;
    }
    .card_main{
        text-align: center
    }
    .card{
        height: 150px;
        width: 350px;
        display: inline-block;
        background-color: #e2e2e2
    }
    h1{
        font-size: 70px;
        font-weight: bold;
    }
    table{
        width: 80% !important
    }
    .table_main{
        display: flex;
        justify-content: center
    }
</style>
</head>
<body>
<?php
session_start();
include("connect.php");
?>
<div class="login-form">
    <?php 
        if(isset($_SESSION["mid"]) && $_SESSION["type"] == "A"){
            $id = $_SESSION["mid"];

            $query = mysql_query("select * from admin where mid=$id");
            $temp_users = mysql_query("select count(1) from customer");
            $u = mysql_fetch_array($temp_users);
            $users = $u[0];

            $temp_seller = mysql_query("select count(1) from seller");
            $s = mysql_fetch_array($temp_seller);
            $sellers = $s[0];

            $info = mysql_fetch_array($query);
            ?>
                <!-- NAVBAR -->
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="#">ADMIN PANEL</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $info["email"]; ?></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                        </div>
                    </div>
                </nav>

                <!-- MAIN BODY -->
                <div class="row">
                    <div class="col-md-2 sidebar_main">
                    <ul class="list-unstyled">
                        <li class="sidelist">
                            <a href="#">View Sellers</a>
                        </li>
                        <li class="sidelist">
                            <a href="#">View Orders</a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-10 content_main">
                        <div class="row">
                            <div class="col-md-6 card_main">
                                <div class="card">
                                    <h1><?php echo $users; ?></h1>
                                    <p>Registered users</p>
                                </div>
                            </div>
                            <div class="col-md-6 card_main">
                                <div class="card">
                                <h1><?php echo $sellers; ?></h1>
                                    <p>Registered sellers</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h2>Past Transactions</h2>
                        <div class="row">
                            <div class="col-md-12 table_main">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customer Name</th>
                                        <th>Customer Address</th>
                                        <th>Customer Phone</th>
                                        <th>Date of Order</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $trans = mysql_query("select * from transaction");
                                        while($d = mysql_fetch_array($trans)){
                                    ?>
                                            <tr>
                                                <td><?php 
                                                    $pid = $d["pid"];
                                                    $product = mysql_query("select *  from products where pid=$pid");
                                                    $p_data = mysql_fetch_array($product);
                                                ?>
                                                   <img src="products/<?php echo $p_data['photo'];?>" alt=" " class="img-responsive" height="50px" width="50px" />
                                                    <strong><?php echo $p_data["name"]; ?></strong>
                                                </td>
                                                <td><?php echo $d["name"]; ?></td>
                                                <td><?php echo $d["address"]; ?></td>
                                                <td><?php echo $d["phone"]; ?></td>
                                                <td><?php echo $d["date"]; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }else{
            ?>
                <h3>You are not authorized to access this page. Go back to <a href="admin_panel.php">Admin Panel</a></h3>
            <?php
        }
    ?>
</div>

</body>
</html>  