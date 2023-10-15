<?php
include("koneksi.php");
if(!empty($_POST['aksi'])){
	$username = mysql_escape_string($_POST['username']);
	$password = md5(mysql_escape_string($_POST['password']));
	$sql = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
	$hitung = mysql_num_rows($sql);
	if($hitung>0){
		$hasil = mysql_fetch_array($sql);
		$_SESSION['id_user'] = $hasil['id_user'];
		$_SESSION['username'] = $hasil['username'];
		$_SESSION['level'] = $hasil['level'];
		?>
		<script type="text/javascript">
			window.alert('login berhasil');
			document.location='dashboard.php';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.alert('login gagal');
			document.location='login.php';
		</script>
		<?php
	}
}else{
	header("Location: login.php");
}
?>