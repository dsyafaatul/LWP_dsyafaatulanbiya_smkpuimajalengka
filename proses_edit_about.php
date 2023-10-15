<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$id_about = $_POST['id_about'];
		$nama = $_POST['nama'];
		$no_telp = $_POST['no_telp'];
		$sql = mysql_query("UPDATE about SET nama='$nama',no_telp='$no_telp' WHERE id_about='$id_about';");
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil diubah');
				document.location='dashboard.php?menu=about';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal diubah');
				document.location='dashboard.php?menu=about';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=about");
	}
?>