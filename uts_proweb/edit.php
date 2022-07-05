<?php 
include('con_db.php');
$id = (isset($_GET['id']))?$_GET['id']:'';
$query = mysqli_query($connect,"select * from mhs where id='$id'");
$data = mysqli_fetch_array($query);
$Id = $data['id'];
$nim = $data['nim'];
$nama = $data['nama'];
$alamat = $data['alamat'];
$prodi = $data['id_prodi'];
$mk = $data['id_mk'];
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> form update data</title>
</head>
<body>
	<h1>Form Update Data</h1>
	<form action="save_update.php" method="post">
		Id :
		<br><input type="text" value="<?php echo $id?>"><br>
		NIM :
		<br><input type="text" value="<?php echo $nim?>"><br>
		Nama :
		<br><input type="text" value="<?php echo $nama?>"><br>
		Alamat :
		<br><input type="text" value="<?php echo $alamat?>"><br>
		Prodi :
		<br><select name="prodi_id">
			<?php 
			$query_prodi = mysqli_query($connect, "SELECT * FROM prodi");
			while ($prodi = $query_prodi->fetch_array(MYSQLI_BOTH)) {
				if($prodi['id']==$prodi['id_prodi'])
					$select = 'selected="selected"';
				else
					$select ='';
				echo "<option value='".$prodi['id']."'>".$prodi['nama']."</option>";
			}?>
		</select><br>
		Matkul :
		<br><select name="id_mk">
			<?php 
			$query = mysqli_query($connect, "SELECT * FROM mk");
			while ($rows = $query->fetch_array(MYSQLI_BOTH)) {
				echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}?>
		</select><br>
		<input type="submit" value="perbaharui">
	</form>

</body>
</html>
