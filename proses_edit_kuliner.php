<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$id_kuliner = $_POST['id_kuliner'];
		$nama_kuliner = $_POST['nama_kuliner'];
		$deskripsi = $_POST['deskripsi'];
		if(!empty($_FILES['gambar']['type'])){
		$nama_gambar = $_FILES['gambar']['name'];
		$type_gambar = $_FILES['gambar']['type'];
		$size_gambar = $_FILES['gambar']['size'];
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$nama_gambar);
			$sql = mysql_query("UPDATE kuliner SET nama_kuliner='$nama_kuliner',deskripsi='$deskripsi',gambar='$nama_gambar' WHERE id_kuliner='$id_kuliner';");
		}else{
			$sql = mysql_query("UPDATE kuliner SET nama_kuliner='$nama_kuliner',deskripsi='$deskripsi' WHERE id_kuliner='$id_kuliner';");
		}
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil diubah');
				document.location='dashboard.php?menu=kuliner';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal diubah');
				document.location='dashboard.php?menu=kuliner';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=kuliner");
	}
?>