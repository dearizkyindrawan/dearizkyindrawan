<?php 
include "con_db.php";

$id = (isset($_GET['id']))?$_GET['id']:'';
$sql = "SELECT * FROM mhs WHERE id='$id'";
$res = $connect->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> update data</title>
 </head>
 <body>
 	<h1>form update mahasiswa</h1>
 	<a href="tambah_mhs.php"> input data baru</a> | <a href="mhs.php">database</a><br>
 	<form action="save_update.php" method="post">
 		Id <br>
 		<input type="text" name="id" value="<?php echo $row['id']?>"><br>
 		Prodi <br>
 		<select name="id_prodi">
 			<?php 
 			$sqlprodi = "SELECT * FROM prodi";
 			$res_prodi = $connect->query($sqlprodi);
 			while($prodi = $res_prodi->fetch_array(MYSQLI_BOTH)){
 				if($prodi['id']==$row['id_prodi'])
 					$select = 'selected="selected"';
 				else
 					$select = '';
 				echo "<option value='".$prodi['id']."' $select>".$prodi['nama']."</option>";
 			} ?></select><br>
 		Mata Muliah <br>
 		<select name="id_mk">
 			<?php 
 			$sqlmk = "SELECT * FROM mk";
 			$res_mk = $connect->query($sqlmk);
 			while($mk = $res_mk->fetch_array(MYSQLI_BOTH)){
 				if($mk['id']==$row['id_mk'])
 					$select = 'selected="selected"';
 				else
 					$select = '';
 				echo "<option value='".$mk['id']."' $select>".$mk['nama']."</option>";
 			} ?></select><br>
 		NIM <br>
 		<input type="text" name="nim" value="<?= $row['nim']?>"><br>
 		Nama <br>
 		<input type="text" name="nama" value="<?= $row['nama']?>"><br>
 		Alamat <br>
 		<input type="text" name="alamat" value="<?= $row['alamat']?>"><br>	
 		<input type="submit" name="proses" value="perbarui">
 		
 		

 	</form>
 
 </body>
 </html>