<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mhs - add</title>
</head>
<body>
<h2>Tambah Data Mahasiswa</h2>
<a href="mhs_add.php">TAMBAH</a> <a href="mhs.php">LIHAT</a>
<br>
<form action="mhs_proc.php" method="post">
	ID<br>
	<input type="text" name="id"><br>
	Nama<br>
	<input type="text" name="nama"><br>
	Prodi<br>
	<select name="prodi_id">
		<?php 
			$sql = "SELECT * FROM prodi";
			$res = $conn->query($sql);
			while($rows = $res->fetch_array(MYSQLI_BOTH)){
				echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}
		?>
	</select><br>
	Alamat<br>
	<input type="text" name="alamat"><br>
	Kota<br>
	<input type="text" name="kota"><br>
	<input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>