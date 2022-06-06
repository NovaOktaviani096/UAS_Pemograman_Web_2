<?php include '../template/header.php';?>
<?php include '../template/sidebar.php';?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="content">
    <h2>Adopt History</h2>
    <?php 
        session_start();
        if($_SESSION['status'] !="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h5><?php echo $_SESSION['username']; ?></h5>
    <h4><?php include '../data/history.php';?></h4>
    <br/>
</div>
</body>
</html>