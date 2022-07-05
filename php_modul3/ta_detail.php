<?php
include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM ta WHERE id='$id'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>TA edit</title>
</head>
<body>
<a href="ta.php">LIHAT</a> | <a href="ta_add.php">TAMBAH</a>
<br>
<form name="myform" action="ta_proc.php" method="POST">
ID
<br>
<input type="text" name="id" id="id" value="<?php echo $dat['id']?>">
<br>Nama
<br>
<input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
<br>
<input type="submit" name="ta_edit" id="ta_edit" value="PERBAHARUI">
<input type="submit" name="ta_delete" id="ta_delete" value="HAPUS">
</form>
</body>
</html>