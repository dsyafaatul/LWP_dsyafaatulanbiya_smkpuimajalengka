<?php
if(!empty($_GET['aksi'])){
	$aksi = $_GET['aksi'];
}else{
	$aksi = "";
}
if($aksi=="tambah"){
?>
<h2>Tambah Data User</h2>
<div class="form-input">
<form enctype="multipart/form-data" action="proses_tambah_user.php" method="POST">
	<table>
		<tr>
			<td>Nama User</td>
			<td><input type="text" name="nama_user" required="required" placeholder="Nama User"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required="required" placeholder="Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" required="required" placeholder="Password"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>
				<select name="level" required="required">
					<option value="">-- Pilih Level --</option>
					<option value="admin">Admin</option>
					<option value="pengelola">Pengelola</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=user'"></td>
		</tr>
	</table>
</form>
</div>
<?php }else if($aksi=="edit"){
	if(empty($_GET['id_user'])){
		?>
		<script type="text/javascript">
			document.location='dashboard.php?menu=user';
		</script>
		<?php
	}else{
		$id_user = $_GET['id_user'];
		$sql = mysql_query("SELECT * FROM user WHERE id_user='$id_user'");
		$hasil = mysql_fetch_array($sql);
	}
?>
<h2>Edit Data User</h2>
<div class="form-input">
<form enctype="multipart/form-data" action="proses_edit_user.php" method="POST">
	<input type="hidden" name="id_user" value="<?php echo $id_user ?>">
	<table>
		<tr>
			<td>Nama User</td>
			<td><input type="text" name="nama_user" required="required" placeholder="Nama User" value="<?php echo $hasil['nama_user'] ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required="required" placeholder="Username" value="<?php echo $hasil['username'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" placeholder="Password"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>
				<select name="level" required="required">
					<option value="">-- Pilih Level --</option>
					<option value="admin" <?php echo $hasil['level']=="admin"?"selected":"" ?>>Admin</option>
					<option value="pengelola" <?php echo $hasil['level']=="pengelola"?"selected":"" ?>>Pengelola</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="aksi" value="Simpan"> <input type="button" name="aksi" value="Batal" onclick="document.location='dashboard.php?menu=user'"></td>
		</tr>
	</table>
</form>
</div>
<?php }else{ ?>
<h2>Data User</h2>
<a href="dashboard.php?menu=user&aksi=tambah" class="btn">Tambah</a>
<table border="1" class="table" align="center" cellpadding="10">
	<tr>
		<td>NO</td>
		<td>Nama User</td>
		<td>Username</td>
		<td>Level</td>
		<td>aksi</td>
	</tr>
	<?php
	$no = 0;
	$sql = mysql_query("SELECT * FROM user");
	while ($hasil = mysql_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo ++$no ?></td>
			<td><?php echo $hasil['nama_user']; ?></td>
			<td><?php echo $hasil['username']; ?></td>
			<td><?php echo $hasil['level']; ?></td>
			<td>
				<a class="btn-danger" href="proses_hapus_user.php?id_user=<?php echo $hasil['id_user'] ?>" onclick="return confirm('anda yakin ingin menghapus?')">Hapus</a> | 
				<a class="btn-info" href="dashboard.php?menu=user&aksi=edit&id_user=<?php echo $hasil['id_user'] ?>">Edit</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<?php } ?>