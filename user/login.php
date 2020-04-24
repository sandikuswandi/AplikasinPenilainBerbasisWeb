<!DOCTYPE html>
<?php
include "../Koneksi_PHP/koneksi.php";

?>
<html>
<head>
    <title> | Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../Tambahan/css/bootstrap.css">
</head>
<body>
        
	<div class="web-login">
		
	
    	<div class="label-admin-lgn">LOG IN</div>

		<div class="box-login">
			<form action="ceklogin.php" method="post" class="login-form">
				<label class="lgn-label">Username</label>
				<input type="text" name="username_u" placeholder="Username .." required="required" class="input-lgn">
				<label class="lgn-label">Password</label>
				<input type="password" name="password_u" placeholder="Password .." required="required" class="input-lgn">
				<button type="submit" class="btn btn-primary">Login</button>

<?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal"){
?>
		<div class="alert">
			<?php echo "Username dan Password tidak sesuai !";?>
		</div>
<?php
	}
}
?>

			</form>
		</div>
	</div>
	
</body>
</html>