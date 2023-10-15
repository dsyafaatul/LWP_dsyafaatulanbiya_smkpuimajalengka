<?php
	include("koneksi.php");
	if(!empty($_SESSION['username']) AND !empty($_SESSION['level'])){
		header("Location: dashboard.php");
	}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="PIKM : Wisata dan Kuliner Majalengka">
	<meta name="keywords" content="wisata,kuliner,majalengka">
	<meta name="author" content="D.Syafaatul Anbiya">
	<meta name="viwport" content="width=device-width,initial-scale=1">
	<title>PIKM : Wisata dan Kuliner Majalengka</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="logo.png">
</head>
<body>
	<div class="login-panel">
		<h4 style="text-align: center;color: white;margin: 2px;">LOGIN</h4>
		<form action="proses_login.php" method="POST">
			<table>
				<tr>
					<td><input type="text" name="username" placeholder="USERNAME" required="required"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="PASSWORD" required="required"></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="aksi" value="LOGIN" style="width: 100px;"></td>
				</tr>
				<tr>
					<td align="center"><a href="index.php">Kembali ke home</a></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php } ?>