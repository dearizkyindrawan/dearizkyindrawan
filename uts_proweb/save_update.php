<?php 
include('con_db.php');

if(isset($_POST['proses']) && $_POST['proses']=='perbarui'){
$id = $_POST['id'];
$nim = $_POST['nim'];
$prodi = $_POST['id_prodi'];
$mk = $_POST['id_mk'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mhs SET prodi = '$prodi', id_mk = '$mk', nim = '$nim', nama = '$nama', alamat = '$alamat' WHERE id='$id'";
if(!$res= $connect->query($sql))
	echo $sql; 
else
	echo header("Location: mhs.php");
} 
?>
