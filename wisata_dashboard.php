<?php
if(!empty($_GET['aksi'])){
	$aksi = $_GET['aksi'];
}else{
	$aksi = "";
}
if($aksi=="tambah"){
?>
<h2>Tambah Data Wisata</h2>
<div class="form-input">
<form enctype="multipart/form-data" action="proses_tambah_wisata.php" method="POST">
	<table>
		<tr>
			<td>Nama Wisata</td>
			<td><input type="text" name="nama_wisata" required="required" placeholder="Nama Wisata"></td>
		</tr>
		<tr>
			<td>Deskripsi Wisata</td>
			<td><textarea name="deskripsi" required="required" placeholder="Deskripsi Wisata" cols="100" rows="15"></textarea></td>
		</tr>
		<tr>
			<td>Gambar Wisata</td>
			<td><input type="file" name="gambar" required="required" placeholder="Gambar Wisata"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=wisata'"></td>
		</tr>
	</table>
</form>
</div>
<?php
}else if($aksi=="edit"){
	if(empty($_GET['id_wisata'])){
		?>
		<script type="text/javascript">
			document.location='dashboard.php?menu=wisata';
		</script>
		<?php
	}else{
		$id_wisata = $_GET['id_wisata'];
		$sql = mysql_query("SELECT * FROM wisata WHERE id_wisata='$id_wisata'");
		$hasil = mysql_fetch_array($sql);
	}
?>
<h2>Edit Data Wisata</h2>
<div class="form-input">
<form enctype="multipart/form-data" action="proses_edit_wisata.php" method="POST">
	<input type="hidden" name="id_wisata" value="<?php echo $id_wisata ?>">
	<table>
		<tr>
			<td>Nama Wisata</td>
			<td><input type="text" name="nama_wisata" required="required" placeholder="Nama Wisata" value="<?php echo $hasil['nama_wisata'] ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi Wisata</td>
			<td><textarea name="deskripsi" required="required" placeholder="Deskripsi Wisata" cols="100" rows="15" ><?php echo $hasil['deskripsi'] ?></textarea></td>
		</tr>
		<tr>
			<td>Gambar Wisata</td>
			<td><input type="file" name="gambar" placeholder="Gambar Wisata"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=wisata'"></td>
		</tr>
	</table>
</form>
</div>
<?php }else{ ?>
	<h2>Data Wisata</h2>
	<a href="dashboard.php?menu=wisata&aksi=tambah" class="btn">Tambah</a>
<table border="1" class="table" align="center" cellpadding="10">
	<tr>
		<td>NO</td>
		<td>Nama Wisata</td>
		<td width="50">Deskripsi</td>
		<td>Gambar</td>
		<td>aksi</td>
	</tr>
	<?php
	$no = 0;
	$sql = mysql_query("SELECT * FROM wisata INNER JOIN user ON user.id_user=wisata.id_user");
	while ($hasil = mysql_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo ++$no ?></td>
			<td><?php echo $hasil['nama_wisata'] ?></td>
			<td>
			<?php
			if(strlen($hasil['deskripsi'])>80){
				echo substr($hasil['deskripsi'], 0,80);
			}else{
				echo $hasil['deskripsi'];
			}
			?></td>
			<td><?php
				if(!empty($hasil['gambar'])){
					?>
					<img src="gambar/<?php echo $hasil['gambar'] ?>" alt="gambar wisata" width="100">
					<?php
				}else{
					echo "-";
				}
			?></td>
			<td>
				<a class="btn-danger" href="proses_hapus_wisata.php?id_wisata=<?php echo $hasil['id_wisata'] ?>" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a> | 
				<a class="btn-info" href="dashboard.php?menu=wisata&aksi=edit&id_wisata=<?php echo $hasil['id_wisata'] ?>">Edit</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php } ?>