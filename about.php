<h2>About</h2>
<center>
	<img src="majalengka.png" width="200">
</center>
<p>
	Majalengka merupakan kabupaten yang ada di jawa barat, indonesia. yang kaya akan wisata dan kulinernya..,Website ini bertujuan untuk memperkenalkan kepada NETIJEN/pengguna internet yang ingin mengetahui wisata dan kuliner yang ada di majalengka.
</p>
<p>Untuk info selengkapnya hubungi sebagai berikut:</p>
<ol>
	<?php
		$sql = mysql_query("SELECT * FROM about ORDER BY nama ASC");
		while ($hasil = mysql_fetch_array($sql)) {
	?>
		<li><?php echo $hasil['nama'] ?>, No Telp. <?php echo $hasil['no_telp'] ?></li>
	<?php } ?>
</ol>