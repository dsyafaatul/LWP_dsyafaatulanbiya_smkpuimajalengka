<?php
	include("koneksi.php");
	if(!empty($_POST['aksi'])){
		$id_wisata = $_POST['id_wisata'];
		$nama_wisata = $_POST['nama_wisata'];
		$deskripsi = $_POST['deskripsi'];
		if(!empty($_FILES['gambar']['type'])){
		$nama_gambar = $_FILES['gambar']['name'];
		$type_gambar = $_FILES['gambar']['type'];
		$size_gambar = $_FILES['gambar']['size'];
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$nama_gambar);
			$sql = mysql_query("UPDATE wisata SET nama_wisata='$nama_wisata',deskripsi='$deskripsi',gambar='$nama_gambar' WHERE id_wisata='$id_wisata';");
		}else{
			$sql = mysql_query("UPDATE wisata SET nama_wisata='$nama_wisata',deskripsi='$deskripsi' WHERE id_wisata='$id_wisata';");
		}
		if($sql){
			?>
			<script type="text/javascript">
				window.alert('data berhasil diubah');
				document.location='dashboard.php?menu=wisata';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				window.alert('data gagal diubah');
				document.location='dashboard.php?menu=wisata';
			</script>
			<?php
		}
	}else{
		header("Location: dashboard.php?menu=wisata");
	}
?>