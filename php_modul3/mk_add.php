<!DOCTYPE html>
<html>
<head>
<title>Mata kuliah</title>
</head>
<body>
	<h2>Mata kuliah add</h2>
    <a href="mk.php">LIHAT</a> | <a href="mk_add.php">TAMBAH</a>
<br>
	<form name="myform" action="mk_proc.php" method="POST">
	Kode
<br>
<input type="text" name="kode" id="kode">
<br>Nama
<br>
<input type="text" name="nama" id="nama" size="30">
<br>
<input type="submit" name="mk_add" id="mk_add" value="SIMPAN">
</form>
</body>
</html>