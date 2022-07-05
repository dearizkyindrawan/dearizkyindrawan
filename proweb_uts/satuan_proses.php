<?php include "connect_db.php";
if (isset($_POST['proces']) && $_POST['proces'] == 'SAVE') {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$crt_date = date("Y-m-d H:i:s");
	$upd_date = date("Y-m-d H:i:s");
	$query = "INSERT INTO satuan (id, nama, crt_date, upd_date) VALUES ('$id', '$nama', '$crt_date', '$upd_date')";
	if (!$res = $connect->query($query))
		echo $sql;
	else 
		header("Location: satuan.php");
}
if (isset($_POST['proces']) && $_POST['proces'] == 'perbarui')  {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$query = "UPDATE satuan
	SET nama='$nama' WHERE id='$id'";
	if (!$result = $connect->query($query))
		echo $query;
	else 
		header("Location: satuan.php");
}
if (isset($_POST['proces']) && $_POST['proces'] == 'hapus') {
	echo "hapus";
	$id = $_POST['id'];
	$query = "DELETE FROM satuan WHERE id='$id'";
	if (!$res = $connect->query($query)) 
		echo $query;
	else
		header("Location: satuan.php");
}
 ?>