<?php 
include "connect_db.php";
$id = $_GET['id'];
$query=mysqli_query($connect,"DELETE FROM item WHERE id='$id'");
if($query) 
	header('Location: database.php');
 ?>