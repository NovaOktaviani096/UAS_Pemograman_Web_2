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
    <h4><?php include 'card.php';?></h4>
    <h5>Cats</h5>
    <br/>
</div>
</body>
</html>