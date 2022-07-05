<?php 
include "connect_db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>database satuan</title>
</head>
<body>
<h1>database satuan</h1>
<a href="satuan_input.php" class="btn third">input satuan</a><a href="satuan.php" class="btn third">refresh</a><a href="landing_page.php" class="btn third">halaman utama</a>
<br><br>
<?php 
	$query = "SELECT * FROM satuan";
	$result = $connect->query($query);
	echo "<table border='1' width='100%'>";
	echo "<thead>
			<tr bgcolor='yellow'>
			<td align='center'>No.</td>
			<td align='center'>id</td>
			<td align='center'>nama</td>
			<td align='center'>dibuat</td>
			<td align='center'>diubah</td>
			<td align='center'>Action</td>
			</tr>
			</thead>
			<tbody>";
$i = 0;
        while($rows = $result->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td>".$rows['id']."</td>
            <td>".$rows['nama']."</td>
            <td>".$rows['crt_date']."</td>
            <td>".$rows['upd_date']."</td>
            <td align='center'>
                <a href='satuan_edit.php?id=".$rows['id']."'>Edit</a>
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