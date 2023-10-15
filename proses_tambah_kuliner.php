<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$nama_kuliner = $_POST['nama_kuliner'];
		$deskripsi = $_POST['deskripsi'];
		$id_user = $_SESSION['id_user'];
		$nama_gambar = $_FILES['gambar']['name'];
		$type_gambar = $_FILES['gambar']['type'];
		$size_gambar = $_FILES['gambar']['size'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$nama_gambar);
		$sql = mysql_query("INSERT INTO kuliner VALUES('','$nama_kuliner','$deskripsi','$nama_gambar','$id_user');");
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil ditambahkan');
				document.location='dashboard.php?menu=kuliner';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal ditambahkan');
				document.location='dashboard.php?menu=kuliner';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=kuliner");
	}
?>