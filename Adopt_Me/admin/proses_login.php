<?php 

session_start();


include '../config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$stmt = koneksi()->prepare("SELECT * FROM admin where username='$username' and password='$password'");
$stmt->execute();
$result = $stmt->fetchAll();


if($result){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>