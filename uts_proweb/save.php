<?php 
include('con_db.php');

$Id = $_POST['Id'];
$prodi = $_POST['id_prodi'];
$mk = $_POST['id_mk'];
$nim = $_POST['nim'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$query = mysqli_query
($connect, "INSERT INTO mhs(id, id_prodi, id_mk, nim, nama, alamat)
VALUES('$Id','$prodi','$mk','$nim','$nama','$alamat')");
if($query){
	echo 'data berhasil disimpan. klik <a href="tambah_mhs.php">disini</a>untuk input data kembali.';
}else {
	echo 'data gagal di input';
}echo 'kembali ke halaman utama. klik <a href="mhs.php">disini</a>  ';
 ?>
