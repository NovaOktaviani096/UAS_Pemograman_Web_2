<?php 

session_start();


include 'config/koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES (:username,:email,:password)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':username' => $username, ':email' => $email, ':password' => $password));
if($result){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:log.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>