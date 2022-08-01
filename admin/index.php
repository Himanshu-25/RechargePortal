<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../adminlogin.html');
 }
 $mysqli = new mysqli("localhost","harshit","Mysql!2345", "easyrecharge"); 
 $sql = "SELECT * FROM recharge"; 
 $result = $mysqli->query($sql); 
$mysqli->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Easy Recharge : Admin Panel
    </title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"
        rel="stylesheet" type="text/css">
    <!--//fonts-->
    <!-- js -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- js -->
</head>

<body>
    <script async src="/js/autotrack.js"></script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="../images/demobar_w3_4thDec2019.css">

        <div class="banner">
            <div class="header">
                <div class="logo">
                    <h1><a href><i><img src="../images/cell.png" alt=" "></i>Easy Recharge</a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"><img src="../images/menu.png" alt=" "></span>
                    <ul class="nav1" style="text-align: right;">
                        <li><a href="../logout.php">logout</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="container">
                <div class="banner-info">
                    <h3>Welcome To Admin Panel.</h3>
                </div>
                <div class="buttons">
                </div>
            </div>
        </div>
        <!---728x90--->

        <div class="table-responsive">
        <table class="table">
            <thead> 
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Operator</th>
                <th scope="col">Circler</th>
            </tr>
            </thead>
            <tbody>
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['operator'];?></td>
                <td><?php echo $rows['circle'];?></td>
            </tr>
            <?php 
                } 
            ?> 
            </tbody>
        </table>
        </div>

        <div class="footer">
            <div class="container">
                <h2><a href>Easy Recharge</a></h2>
                <p>&copy; 2021 Easy Recharge. All Rights Reserved.</p>
                <ul>
                    <li><a class="face1" href="#"></a></li>
                    <li><a class="face2" href="#"></a></li>
                    <li><a class="face3" href="#"></a></li>
                    <li><a class="face4" href="#"></a></li>
                </ul>
            </div>
        </div>
        <!-- for bootstrap working -->
        <script src="../js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
    </body>
</body>

</html>
