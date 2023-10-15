<?php
	include("koneksi.php");
	if(empty($_SESSION['username']) AND empty($_SESSION['level'])){
		header("Location: login.php");
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
	<div class="wrapper">
		<div class="menu" style="background-color: lightseagreen">
			<ul>
				<li><a href="dashboard.php">Home</a></li>
				<li><a href="dashboard.php?menu=kuliner">Kuliner</a></li>
				<li><a href="dashboard.php?menu=wisata">Wisata</a></li>
				<?php if($_SESSION['level']=="admin"){ ?>
				<li><a href="dashboard.php?menu=user">User</a></li>
				<?php } ?>
				<li><a href="dashboard.php?menu=about">About</a></li>
				<li><a href="proses_logout.php" onclick="return confirm('anda yakin ingin logout?')">Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<?php
			if(!empty($_GET['menu'])){
				$menu = $_GET['menu'];
			}else{
				$menu = "";
			}
			switch ($menu) {
				case 'kuliner':
					include("kuliner_dashboard.php");
					break;
				case 'wisata':
					include("wisata_dashboard.php");
					break;
				case 'about':
					include("about_dashboard.php");
					break;
				case 'user':
					include("user_dashboard.php");
					break;
				
				default:
					include("home_dashboard.php");
					break;
			}
			?>
		</div>
		<div class="footer">
			<p>Copyright @ PIKM UNMA 2019</p>
		</div>
	</div>
</body>
</html>
<?php } ?>