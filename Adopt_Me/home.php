<?php include 'header.php';?>
​<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="content">
    <?php 
        session_start();
        if($_SESSION['status'] !="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h5>Home</h5>
    <br/>
</div>
</body>
</html>