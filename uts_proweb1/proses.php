<?php 
include"con_db.php";
//tambah_mhs
	$id = $_POST['id'];
	$prodi = $_POST['id_prodi'];
	$mk = $_POST['id_mk'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$query = mysqli_query
	($connect, "INSERT INTO mhs(id, prodi, mk, nim, nama, alamat) VALUES ('$id','$prodi','$mk','$nim','$nama','$alamat')");
	if($query){
		echo 'data berhasil di simpan . klik <a href="tambah_mhs.php"> disini </a> untuk input data kembali.';
	}
	else {
		echo 'data gagal di simpan';
	}
 ?>