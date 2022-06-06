<?php 

session_start();


include 'config/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];



$stmt = koneksi()->prepare("SELECT * FROM admin where email='$email' and password='$password'");
$stmt->execute();
$result = $stmt->fetchAll();


if($result){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:log.php?pesan=gagal");
}
?>