<?php
include("koneksi.php");
$id_about = $_GET['id_about'];
if(!empty($id_about)){
	$sql = mysql_query("DELETE FROM about WHERE id_about='$id_about'");
	if($sql){
		?>
		<script type="text/javascript">
			window.alert('data berhasil dihapus');
			document.location='dashboard.php?menu=about';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('data gagal dihapus');
			document.location='dashboard.php?menu=about';
		</script>
		<?php
	}
}else{
	header("Location: dashboard.php?menu=about");
}
?>