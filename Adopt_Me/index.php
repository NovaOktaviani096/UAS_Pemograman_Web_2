<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Pick Cat | user</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="allert">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman dashboard";
		}
	}
	?>
	</div>
<div class="container">
    <h1>Sign up</h1>
	<form method="post" action="sign.php">
        <label>Username</label><br>
        <input type="text" name="username" placeholder="username"><br>

		<label>Email</label><br>
        <input type="text" name="email" placeholder="email"><br>

		<label>password</label><br>
		<input type="password" name="password" placeholder="password"><br>

		<button>Submit</button>
		<b>Already have an acount?
		<a href="log.php">sign up<a>
</b>
	</form>
</div>
<?php include_once 'config/koneksi.php';
?>
</body>
</html>