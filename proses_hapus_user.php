<?php
include("koneksi.php");
$id_user = $_GET['id_user'];
if(!empty($id_user)){
	$sql = mysql_query("DELETE FROM user WHERE id_user='$id_user'");
	if($sql){
		?>
		<script type="text/javascript">
			window.alert('data berhasil dihapus');
			document.location='dashboard.php?menu=user';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('data gagal dihapus');
			document.location='dashboard.php?menu=user';
		</script>
		<?php
	}
}else{
	header("Location: dashboard.php?menu=user");
}
?>