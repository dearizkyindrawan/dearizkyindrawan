<?php  
include "connect_db.php";
//update database
if(isset($_POST['proces']) && $_POST['proces']=='Perbarui'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$item_grp_id = $_POST['item_grp_id'];
	$satuan_id = $_POST['satuan_id'];
	$hpp = $_POST['hpp'];
	

	$query = "UPDATE item
			SET nama='$nama', item_grp_id='$item_grp_id',
			satuan_id='$satuan_id',hpp='$hpp'
		WHERE id='$id'";
	if(!$result = $connect->query($query))
		echo $query;
	else
		header("Location: database.php");
}

if(isset($_POST['proces']) && $_POST['proces']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$query = "DELETE FROM item 
	WHERE id='$id'";
	if(!$result = $connect->query($query))
		echo $query;
	else
		header("Location: database.php");
}
?>