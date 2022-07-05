<?php
include 'koneksi.php';
	$kode = $_GET['kode'];
	$sql = "SELECT * FROM mk WHERE kode='$kode'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Mata kuliah</title>
</head>
<body>
	<h2>Mata Kuliah Edit</h2>
<a href="mk.php">LIHAT</a> | <a href="mk_add.php">TAMBAH</a>
<br>
<form name="myform" action="mk_proc.php" method="POST">
Kode
<br>
<input type="text" name="kode" id="kode" value="<?php echo $dat['kode']?>">
<br>Nama
<br>
<input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
<br>
<input type="submit" name="mk_edit" id="mk_edit" value="PERBAHARUI">
<input type="submit" name="mk_delete" id="mk_delete" value="HAPUS">
</form>
</body>
</html>