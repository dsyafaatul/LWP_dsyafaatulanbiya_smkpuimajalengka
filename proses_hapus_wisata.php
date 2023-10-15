<?php
include("koneksi.php");
$id_wisata = $_GET['id_wisata'];
if(!empty($id_wisata)){
	$sql = mysql_query("DELETE FROM wisata WHERE id_wisata='$id_wisata'");
	if($sql){
		?>
		<script type="text/javascript">
			window.alert('data berhasil dihapus');
			document.location='dashboard.php?menu=wisata';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('data gagal dihapus');
			document.location='dashboard.php?menu=wisata';
		</script>
		<?php
	}
}else{
	header("Location: dashboard.php?menu=wisata");
}
?>