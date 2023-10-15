<?php
if(!empty($_GET['id_wisata'])){
	$id_wisata=$_GET['id_wisata'];
	$sql = mysql_query("SELECT * FROM wisata WHERE id_wisata='$id_wisata'");
	$hasil = mysql_fetch_array($sql);
	?>
	<div class="content-detail">
		<h2><?php echo $hasil['nama_wisata'] ?></h2>
		<img src="gambar/<?php echo $hasil['gambar'] ?>" width="500" >
		<p>
			<?php echo $hasil['deskripsi'] ?>
		</p>
	</div>
	<?php
}else{
	?>
<h2>Wisata</h2>
<?php
	$perhal = 10;
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	$start = ($page-1)*$perhal;
	$sql = mysql_query("SELECT * FROM wisata INNER JOIN user ON user.id_user=wisata.id_user ORDER BY id_wisata DESC LIMIT $start,$perhal");
	while ($hasil = mysql_fetch_array($sql)) {
?>
<div class="isi-content">
	<img src="gambar/<?php echo $hasil['gambar'] ?>" alt="gambar wisata" width="200">
	<h1><?php echo $hasil['nama_wisata'] ?></h1>
	<p>
		<?php
		if(strlen($hasil['deskripsi'])>800){
			echo substr($hasil['deskripsi'], 0,780)."...";
		}else{
			echo $hasil['deskripsi'];
		}
		?>
	</p>
	<a href="index.php?menu=wisata&id_wisata=<?php echo $hasil['id_wisata'] ?>">Lihat</a>
	<div class="clear"></div>
</div>
<?php
}
	$sql2 = mysql_query("SELECT * FROM wisata INNER JOIN user ON user.id_user=wisata.id_user ORDER BY id_wisata DESC");
	$jumlah = mysql_num_rows($sql2);
	$halaman = ceil($jumlah/$perhal);
	for ($i=1; $i <= $halaman; $i++) { 
		?>
		<a href="index.php?menu=wisata&page=<?php echo $i ?>"><?php echo $i ?></a>
		<?php
	}
?>
<?php } ?>