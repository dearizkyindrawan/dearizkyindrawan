<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database</title>
</head>
<body>
	<h1 align="center">DATABASE BARANG DAN HARGA</h1>
	<a href="database_input.php" class="btn third">INPUT DATA</a>  
    <a href="database.php" class="btn third">REFRESH</a>
    <a href="landing_page.php" class="btn third">HALAMAN UTAMA</a>
<br><br>
<?php 
include "connect_db.php";
$query = "SELECT I.*,IG.id as ig_id, IG.nama as ig_nama, S.id as s_id, S.nama as s_nama
                FROM item I
                JOIN item_grp IG ON I.item_grp_id = IG.id
                JOIN satuan S ON I.satuan_id = S.id";
        $res = $connect->query($query);
        echo "<table border='1' cellpadding='4 cellspacing='1' align='center' width='100%'>
        <thead>
        <tr bgcolor='yellow' align='center'>
		<td>NO</td>
		<td>Id</td>
		<td>Nama</td>
		<td>jenis</td>
		<td>Satuan</td>
		<td>Harga</td>
        <td>barcode</td>
        <td>crt date</td>
        <td>upd date</td>
        <td>Action</td>
        
	</tr></thead><tbody>";
         $i = 0;
        while($rows = $res->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td>".$rows['id']."</td>
            <td>".$rows['nama']."</td>
            <td>".$rows['ig_nama']."</td>
            <td>".$rows['s_nama']."</td>
            <td>".$rows['hpp']."</td>
            <td>".$rows['barcode']."</td>
            <td>".$rows['crt_date']."</td>
            <td>".$rows['upd_date']."</td>
            <td align='center'>
                <a href='database_edit.php?id=".$rows['id']."'>Edit</a> 
            </td>
        </tr>";
        }
        echo "	</tbody>
		</table>"
    ?>
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
