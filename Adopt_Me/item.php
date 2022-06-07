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
    <h4>
<?php require 'config/koneksi.php';
$stmt = koneksi()->prepare("SELECT * FROM data_kucing");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php foreach( $result as $row ) : ?>
    <div class="card">
    <img src="<?= $row['foto'] ?>" class="card-img-top" alt="...">
    <p>Nama :  <?= $row['nama_kucing'] ?></p>
    <p>Umur :  <?= $row['umur'] ?></p>
    <p>Alamat :  <?= $row['alamat'] ?></p>
    <p>Keterangan :  <?= $row['keterangan'] ?></p>
</div><br><br><br>
<?php endforeach; ?>
</h4>
    <br/>
</div>
</body>
</html>