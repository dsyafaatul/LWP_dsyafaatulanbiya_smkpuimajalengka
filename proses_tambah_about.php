<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$nama = $_POST['nama'];
		$no_telepon = $_POST['no_telepon'];
		$sql = mysql_query("INSERT INTO about VALUES('','$nama','$no_telepon');");
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil ditambahkan');
				document.location='dashboard.php?menu=about';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal ditambahkan');
				document.location='dashboard.php?menu=about';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=about");
	}
?>