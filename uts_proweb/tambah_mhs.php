<?php include "con_db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> form input data</title>
</head>
<body>
	<h1>Form Input Data</h1>
	<form action="save.php" method="post">
		Id :<br><input type="text" name="Id"><br>
		NIM :<br><input type="text" name="nim"><br>
		Nama :<br><input type="text" name="Nama"><br>
		Alamat :<br><input type="text" name="Alamat"><br>
		Prodi :<br><select name="id_prodi">
		
		<?php 
			$query = mysqli_query($connect, "SELECT * FROM prodi");
			while ($rows = $query->fetch_array(MYSQLI_BOTH)) {
			echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}?></select><br>
		Matkul :
		<br><select name="id_mk">
			<?php 
			$query = mysqli_query($connect, "SELECT * FROM mk");
			while ($rows = $query->fetch_array(MYSQLI_BOTH)) {
				echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}?></select><br>
		<input type="submit" value="simpan">
	</form>

</body>
</html>