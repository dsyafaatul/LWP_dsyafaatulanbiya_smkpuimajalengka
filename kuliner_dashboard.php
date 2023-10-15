<?php
if(!empty($_GET['aksi'])){
	$aksi = $_GET['aksi'];
}else{
	$aksi = "";
}
if($aksi=="tambah"){
?>
<h2>Tambah Data Kuliner</h2>
<div class="form-input">
<form enctype="multipart/form-data" action="proses_tambah_kuliner.php" method="POST">
	<table>
		<tr>
			<td>Nama Kuliner</td>
			<td><input type="text" name="nama_kuliner" required="required" placeholder="Nama Kuliner"></td>
		</tr>
		<tr>
			<td>Deskripsi Kuliner</td>
			<td><textarea name="deskripsi" required="required" placeholder="Deskripsi Kuliner" cols="100" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>Gambar kuliner</td>
			<td><input type="file" name="gambar" required="required" placeholder="Gambar Kuliner"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=kuliner'"></td>
		</tr>
	</table>
</form>
</div>
<?php
}else if($aksi=="edit"){
	if(empty($_GET['id_kuliner'])){
		?>
		<script type="text/javascript">
			document.location='dashboard.php?menu=kuliner';
		</script>
		<?php
	}else{
		$id_kuliner = $_GET['id_kuliner'];
		$sql = mysql_query("SELECT * FROM kuliner WHERE id_kuliner='$id_kuliner'");
		$hasil = mysql_fetch_array($sql);
	}
?>
<h2>Edit Data Kuliner</h2>
<div class="form-input">
	<form enctype="multipart/form-data" action="proses_edit_kuliner.php" method="POST">
		<input type="hidden" name="id_kuliner" value="<?php echo $id_kuliner ?>">
		<table>
			<tr>
				<td>Nama Kuliner</td>
				<td><input type="text" name="nama_kuliner" required="required" placeholder="Nama Kuliner" value="<?php echo $hasil['nama_kuliner'] ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi Kuliner</td>
				<td><textarea name="deskripsi" required="required" placeholder="Deskripsi Kuliner" cols="100" rows="10"><?php echo $hasil['deskripsi'] ?></textarea></td>
			</tr>
			<tr>
				<td>Gambar kuliner</td>
				<td><input type="file" name="gambar" placeholder="Gambar Kuliner"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=kuliner'"></td>
			</tr>
		</table>
	</form>
</div>
<?php }else{ ?>
<h2>Data Kuliner</h2>
<a href="dashboard.php?menu=kuliner&aksi=tambah" class="btn">Tambah</a>
<table border="1" class="table" align="center" cellpadding="10">
	<tr>
		<td>NO</td>
		<td>Nama Kuliner</td>
		<td width="400">Deskripsi</td>
		<td>Gambar</td>
		<td>aksi</td>
	</tr>
	<?php
	$no = 0;
	$sql = mysql_query("SELECT * FROM kuliner INNER JOIN user ON user.id_user=kuliner.id_user");
	while ($hasil = mysql_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo ++$no ?></td>
			<td><?php echo $hasil['nama_kuliner'] ?></td>
			<td>
			<?php
			if(strlen($hasil['deskripsi'])>80){
				echo substr($hasil['deskripsi'], 0,80)."...";
			}else{
				echo $hasil['deskripsi'];
			}
			?></td>
			<td><?php
				if(!empty($hasil['gambar'])){
					?>
					<img src="gambar/<?php echo $hasil['gambar'] ?>" alt="gambar_makanan" width="100">
					<?php
				}else{
					echo "-";
				}
			?></td>
			<td>
				<a class="btn-danger" href="proses_hapus_kuliner.php?id_kuliner=<?php echo $hasil['id_kuliner'] ?>" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a> | 
				<a class="btn-info" href="dashboard.php?menu=kuliner&aksi=edit&id_kuliner=<?php echo $hasil['id_kuliner'] ?>">Edit</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php } ?>