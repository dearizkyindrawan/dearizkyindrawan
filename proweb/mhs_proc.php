<?php 
include "con_db.php";

//tambah data
if(isset($_POST['proses']) && $_POST['proses']=='SIMPAN'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id = $_POST['prodi_id'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	$sql = "INSERT INTO mhs 
			(id,nama,prodi_id,kota,alamat)
			VALUES 
			('$id','$nama','$prodi_id','$kota','$alamat')";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}

//update data
if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id = $_POST['prodi_id'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	$sql = "UPDATE mhs 
			SET nama='$nama', prodi_id='$prodi_id',
			alamat='$alamat',kota='$kota'
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}

//hapus data
if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM mhs
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}
?>