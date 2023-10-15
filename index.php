<?php
include("koneksi.php");
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
	<style>
		.content-detail::after{
			content: "";
			display: block;
			clear: both;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<!-- <h1><a href="index.php">Wisata & Kuliner Majalengka</a></h1> -->
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?menu=kuliner">Kuliner</a></li>
				<li><a href="index.php?menu=wisata">Wisata</a></li>
				<li><a href="index.php?menu=about">About</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
			<form method="GET">
				<input type="hidden" name="menu" value="search">
				<input type="text" name="search" placeholder="Search">
			</form>
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
					include("kuliner.php");
					break;
				case 'wisata':
					include("wisata.php");
					break;
				case 'about':
					include("about.php");
					break;
				case 'search':
					include("search.php");
					break;
				
				default:
					include("home.php");
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