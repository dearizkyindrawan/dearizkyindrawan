<?php 
include('con_db.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM mhs WHERE id='$id'");
if($query){
	echo 'data berhasil di hapus. klik <a href="mhs.php"> disini </a> untuk ke halaman utama.';} else {
		echo 'data gagal di hapus. klik <a href="mhs.php"> disini </a> untuk ke halaman utama. ';
	}


?>