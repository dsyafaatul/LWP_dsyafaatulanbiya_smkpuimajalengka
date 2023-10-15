<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$id_user = $_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$level = $_POST['level'];
		if(!empty($password)){
			$password = $_POST['password'];
			$sql = mysql_query("UPDATE user SET nama_user='$nama_user',username='$username',password='$password',level='$level' WHERE id_user='$id_user';");
		}else{
			$sql = mysql_query("UPDATE user SET nama_user='$nama_user',username='$username',level='$level' WHERE id_user='$id_user';");
		}
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil diubah');
				document.location='dashboard.php?menu=user';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal diubah');
				document.location='dashboard.php?menu=user';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=user");
	}
?>