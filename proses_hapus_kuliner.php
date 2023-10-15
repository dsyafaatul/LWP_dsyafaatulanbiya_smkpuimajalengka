<?php
include("koneksi.php");
$id_kuliner = $_GET['id_kuliner'];
if(!empty($id_kuliner)){
	$sql = mysql_query("DELETE FROM kuliner WHERE id_kuliner='$id_kuliner'");
	if($sql){
		?>
		<script type="text/javascript">
			window.alert('data berhasil dihapus');
			document.location='dashboard.php?menu=kuliner';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('data gagal dihapus');
			document.location='dashboard.php?menu=kuliner';
		</script>
		<?php
	}
}else{
	header("Location: dashboard.php?menu=kuliner");
}
?>