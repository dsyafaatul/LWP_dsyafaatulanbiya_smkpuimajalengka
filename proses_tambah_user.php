<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];
		$sql = mysql_query("INSERT INTO user VALUES('','$nama_user','$username','$password','$level');");
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil ditambahkan');
				document.location='dashboard.php?menu=user';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal ditambahkan');
				document.location='dashboard.php?menu=user';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=user");
	}
?>