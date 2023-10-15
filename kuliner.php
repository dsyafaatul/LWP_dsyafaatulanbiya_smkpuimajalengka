<?php
if(!empty($_GET['id_kuliner'])){
	$id_kuliner=$_GET['id_kuliner'];
	$sql = mysql_query("SELECT * FROM kuliner WHERE id_kuliner='$id_kuliner'");
	$hasil = mysql_fetch_array($sql);
	?>
	<div class="content-detail">
		<h2><?php echo $hasil['nama_kuliner'] ?></h2>
		<img src="gambar/<?php echo $hasil['gambar'] ?>" width="500" >
		<p>
			<?php echo $hasil['deskripsi'] ?>
		</p>
	</div>
	<?php
}else{

?>
<h2>Kuliner</h2>
<?php
	$perhal = 10;
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	$start = ($page-1)*$perhal;
	$sql = mysql_query("SELECT * FROM kuliner INNER JOIN user ON user.id_user=kuliner.id_user ORDER BY id_kuliner DESC LIMIT $start,$perhal");
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
<?php
}
	$sql2 = mysql_query("SELECT * FROM kuliner INNER JOIN user ON user.id_user=kuliner.id_user ORDER BY id_kuliner DESC");
	$jumlah = mysql_num_rows($sql2);
	$halaman = ceil($jumlah/$perhal);
	for ($i=1; $i <= $halaman; $i++) { 
		?>
		<a href="index.php?menu=kuliner&page=<?php echo $i ?>"><?php echo $i ?></a>
		<?php
	}
?>
<?php } ?>