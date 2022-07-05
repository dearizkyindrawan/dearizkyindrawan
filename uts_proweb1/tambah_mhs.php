<?php include "con_db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>input mahasiswa baru</title>
</head>
<body>
<h1>Form Input Data</h1>
<a href="mhs.php">kembali ke halaman utama</a>
<form action="proses.php" method="post">
Id :<input type="text" name="id"><br>
Prodi : <select name="id_prodi">
	<?php 
	$query= mysqli_query($connect, "SELECT * FROM prodi");
	while ($rows = $query->fetch_array(MYSQLI_BOTH)){
		echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
	} ?></select><br>
Mata Kuliah : <select name="id_mk">
	<?php 
	$query= mysqli_query($connect, "SELECT * FROM mk");
	while ($rows = $query->fetch_array(MYSQLI_BOTH)){
		echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
	} ?></select><br>
	Nim : <input type="text" name="nim"><br>
	Nama : <input type="text" name="nama"><br>
	Alamat : <input type="text" name="alamat"><br>
	<input type="submit" name="proces" value="simpan">
</form>
</body>
</html>