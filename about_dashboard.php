<?php
if(!empty($_GET['aksi'])){
	$aksi = $_GET['aksi'];
}else{
	$aksi = "";
}
if($aksi=="tambah"){
?>
<h2>Tambah Data About</h2>
<form enctype="multipart/form-data" action="proses_tambah_about.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required="required" placeholder="Nama"></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="no_telepon" required="required" placeholder="No Telepon"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=about'"></td>
		</tr>
	</table>
</form>
<?php
}else if($aksi=="edit"){
	if(empty($_GET['id_about'])){
		?>
		<script type="text/javascript">
			document.location='dashboard.php?menu=about';
		</script>
		<?php
	}else{
		$id_about = $_GET['id_about'];
		$sql = mysql_query("SELECT * FROM about WHERE id_about='$id_about'");
		$hasil = mysql_fetch_array($sql);
	}
?>
<h2>Edit Data About</h2>
	<form enctype="multipart/form-data" action="proses_edit_about.php" method="POST">
		<input type="hidden" name="id_about" value="<?php echo $id_about ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required="required" placeholder="Nama" value="<?php echo $hasil['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="no_telp" required="required" placeholder="No Telepon" value="<?php echo $hasil['no_telp'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=about'"></td>
			</tr>
		</table>
	</form>
<?php }else{ ?>
<h2>Data About</h2>
<a href="dashboard.php?menu=about&aksi=tambah" class="btn">Tambah</a>
<table border="1" class="table" align="center" cellpadding="10">
	<tr>
		<td>NO</td>
		<td>Nama</td>
		<td>No Telepon</td>
		<td>aksi</td>
	</tr>
	<?php
	$no = 0;
	$sql = mysql_query("SELECT * FROM about ORDER BY nama ASC");
	while ($hasil = mysql_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo ++$no ?></td>
			<td><?php echo $hasil['nama'] ?></td>
			<td><?php echo $hasil['no_telp'] ?></td>
			<td>
				<a class="btn-danger" href="proses_hapus_about.php?id_about=<?php echo $hasil['id_about'] ?>" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a> | 
				<a class="btn-info" href="dashboard.php?menu=about&aksi=edit&id_about=<?php echo $hasil['id_about'] ?>">Edit</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php } ?>