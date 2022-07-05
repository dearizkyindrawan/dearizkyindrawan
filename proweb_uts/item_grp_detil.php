<?php
include "connect_db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item_grp WHERE id='$id'";
$res = $connect->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan - Detil</title>
</head>
<body>
<h2>Detil Data Group</h2>
<a href="item_grp_add.php" class="btn third">input database item</a> <a href="item_grp.php" class="btn third">database item</a> <a href="landing_page.php" class="btn third">halaman utama</a>
<br><br>
<form action="item_grp_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
    upline<br>
	<input type="text" name="upline" value="<?= $row['upline']?>"><br>
    supplier<br>
    <input type="text" name="upline" value="<?= $row['supplier']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	<input type="submit" name="proses" value="PERBAHARUI">
	<input type="submit" name="proses" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>
<style type="text/css">
    body{
        background-color: skyblue;
    }
    .btn {
  width: 10px;
  height: 4px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  align-self: center;
  font-size: x-small;
  font-weight: 10;
  line-height: 1;
  margin: 10px;
  padding: 1em 2em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 50;
}

.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}
.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}
</style>


