<?php 
include "connect_db.php";
$id =$_GET['id'];
$query = "SELECT * FROM item WHERE id='$id'";
$result = $connect->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Database Edit
 	</title>
 </head>
 <body>
 <h1>edit database</h1>
 <a href="input.php">Input</a> | <a href="database.php">Database Utama</a> <br>
 <form action="perbarui.php" method="post">
 	ID <br><input type="text" name="id" value="<?php echo $row['id']?>"><br>
 	Nama <br><input type="text" name="nama" value="<?= $row['nama']?>"><br>
 	Jenis <br>
 	<select name="item_grp_id">
 		<?php 
 		$query_item = "SELECT * FROM item_grp";
 		$result_item  = $connect->query($query_item);
 		while ($item_grp = $result_item->fetch_array(MYSQLI_BOTH)) {
 			if($item_grp['id']==$row['item_grp_id'])
 				$select = 'selected="selected"';
 			else $select ='';
 			echo "<option value='".$item_grp['id']."' $select>".$item_grp['nama']."</option>";
 		}
 	?>
 	</select><br>
 	Satuan <br>
 	<select name="satuan_id">
 		<?php 
 		$query_satuan = "SELECT * FROM satuan";
 		$result_satuan  = $connect->query($query_satuan);
 		while ($satuan = $result_satuan->fetch_array(MYSQLI_BOTH)) {
 			if($satuan['id']==$row['satuan_id'])
 				$select = 'selected="selected"';
 			else $select ='';
 			echo "<option value='".$satuan['id']."' $select>".$satuan['nama']."</option>";
 		}?></select><br>
 		Harga<br>
	<input type="text" name="hpp" value="<?= $row['hpp']?>"><br>
	<input type="submit" name="proces" value="Perbarui">
    <input type="submit" name="proces" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
 </form>
 </body>
 </html>