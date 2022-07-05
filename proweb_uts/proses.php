<?php 
include "connect_db.php";
if (isset($_POST['proces']) && $_POST['proces']== 'TAMBAH') {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
    $item_grp_id = $_POST['item_grp_id'];
    $satuan_id = $_POST['satuan_id']; 
    $hpp = $_POST['hpp'];

    $query = "INSERT INTO item (id, nama, item_grp_id, satuan_id, hpp)
            VALUES ('$id', '$nama', '$item_grp_id', '$satuan_id', '$hpp')";
    if (!$res = $connect->query($query))
        echo $sql;
    else 
        header("Location: database.php");
}

if (isset($_POST['proces']) && $_POST['proces'] == 'SAVE'){
$id = $_POST['id'];
$upline = $_POST['upline'];
$nama = $_POST['nama'];
$query ="INSERT INTO item_grp (id, upline, nama) VALUES ('$id', '$upline', '$nama')";
if (!$result = $connect->query($query))
    echo $query;
else 
    header("Location: item.php");
}
?>