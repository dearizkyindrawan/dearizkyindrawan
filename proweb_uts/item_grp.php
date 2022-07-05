<?php
include "connect_db.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Grup List</title>
</head>
<body>
    <h2 align="center">Laporan Group</h2>
    <a href="item_grp_add.php" class="btn third">input database item</a>  <a href="item_grp.php" class="btn third">refresh</a> <a href="landing_page.php" class="btn third">halaman utama</a>
    <br><br>
    <?php
        $sql = "SELECT * FROM item_grp";
        $res = $connect->query($sql);
        $jum_data = $res->num_rows;

        echo "<table border='1' width='100%'>";
    	echo "	<thead>
				<tr bgcolor='yellow' align='center'>
					<td>No.</td>
					<td>ID</td>
					<td>Upline</td>
					<td>Nama</td>
                    <td>supplier</td>
                    <td>DiBuat</td>
                    <td>DiUbah</td>
                    <td>Action</td>
				</tr>
			</thead
			<tbody>";

        $i = 0;
        while($rows = $res->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td>".$rows['id']."</td>
            <td>".$rows['upline']."</td>
            <td>".$rows['nama']."</td>
            <td>".$rows['supplier']."</td>
            <td>".$rows['crt_date']."</td>
            <td>".$rows['upd_date']."</td>
            <td align='center'>
                <a href='item_grp_detil.php?id=".$rows['id']."'>Edit</a>
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