<?php
include 'koneksi.php';
	if(isset($_POST['ta_add'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$sql = "INSERT INTO ta(id,nama)
	VALUES('$id','$nama')";
	
	if(!$conn->query($sql)){
	die('Tambah MHS Gagal');
	}
	else{
	header("Location: ta.php");
	}
}

	if(isset($_POST['ta_edit'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$sql = "UPDATE ta SET  nama='$nama' WHERE id='$id'";
	
	if(!$conn->query($sql)){
		die('Edit MHS Gagal');
	}
	else{
	header("Location: ta.php");
	}
}

	if(isset($_POST['ta_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM ta WHERE id='$id'";
	if(!$conn->query($sql)){
		die('Hapus Tahun Akademik Gagal');
	}
	else{
	header("Location: ta.php");
	}
}
	?>
