<?php
include 'koneksi.php';
	if(isset($_POST['mk_add'])){
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$sql = "INSERT INTO mk(kode,nama)
	VALUES('$kode','$nama')";
	
	if(!$conn->query($sql)){
	die('Tambah MHS Gagal');
	}
	else{
	header("Location: mk.php");
	}
}

	if(isset($_POST['mk_edit'])){
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$sql = "UPDATE mk SET  nama='$nama' WHERE kode='$kode'";
	
	if(!$conn->query($sql)){
		die('Edit MHS Gagal');
	}
	else{
	header("Location: mk.php");
	}
}

	if(isset($_POST['mk_delete'])){
	$kode = $_POST['kode'];
	$sql = "DELETE FROM mk WHERE kode='$kode'";
	if(!$conn->query($sql)){
		die('Hapus Tahun Akademik Gagal');
	}
	else{
	header("Location: mk.php");
	}
}
	?>
