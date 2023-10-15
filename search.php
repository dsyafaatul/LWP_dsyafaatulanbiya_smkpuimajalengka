<div class="form-search">
	<form method="GET">
		<input type="hidden" name="menu" value="search">
		<input type="text" name="search" placeholder="Search">
	</form>
</div>
<?php
if(!empty($_GET['search'])){
	$search = $_GET['search'];
	?>
	<h3>Cari : "<?php echo $search ?>"</h3>
	<h2 style="text-align: center;">Kuliner</h2>
	<?php
		$sql = mysql_query("SELECT * FROM kuliner INNER JOIN user ON user.id_user=kuliner.id_user WHERE nama_kuliner LIKE '%$search%' ORDER BY id_kuliner DESC" );
		while ($hasil = mysql_fetch_array($sql)) {
	?>
	<div class="isi-content">
		<img src="gambar/<?php echo $hasil['gambar'] ?>" alt="gambar kuliner" width="200">
		<h1><?php echo $hasil['nama_kuliner'] ?></h1>
		<p>
			<?php
			if(strlen($hasil['deskripsi'])>800){
				echo substr($hasil['deskripsi'], 0,780)."...";
			}else{
				echo $hasil['deskripsi'];
			}
			?>
		</p>
		<a href="index.php?menu=kuliner&id_kuliner=<?php echo $hasil['id_kuliner'] ?>">Lihat</a>
		<div class="clear"></div>
	</div>
	<?php } ?>
	<h2 style="text-align: center;">Wisata</h2>
	<?php
		$sql = mysql_query("SELECT * FROM wisata INNER JOIN user ON user.id_user=wisata.id_user WHERE nama_wisata LIKE '%$search%'  ORDER BY id_wisata DESC");
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
	<?php } ?>
	<?php
}
?>