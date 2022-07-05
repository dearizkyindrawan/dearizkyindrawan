<?php
include "connect_db.php";

if (isset($_POST['proses']) and $_POST['proses'] == 'SIMPAN'){
    $id = $_POST['id'];
    $upline = $_POST['upline'];
    $nama = $_POST['nama'];
    $supplier = $_POST['supplier'];

    $sql = "INSERT INTO item_grp (id, nama, upline, supplier)
            VALUES ('$id', '$nama', '$upline', '$supplier')";
    if (!$res = $connect->query($sql))
        echo $sql;
    else 
        header("Location: item_grp.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
    $upline = $_POST['upline'];
	$nama = $_POST['nama'];

	$sql = "UPDATE item_grp
			SET upline='$upline', nama='$nama'
		    WHERE id='$id'";
	if(!$res = $connect->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM item_grp
			WHERE id='$id'";
	if(!$res = $connect->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

?>