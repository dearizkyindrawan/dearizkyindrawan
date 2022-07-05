<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Tahun Akademik</title>
</head>
<body>
    <h2 align="center">Tahun  Akademik</h2>
    <a href="ta.php">LIHAT</a> | <a href="ta_add.php">TAMBAH</a>
    <table width='100%' border='1'>
     <thead>
     <tr>
     <th width='2%'>No.</th>
     <th width='5%'>Act</th>
     <th width='15%'>ID</th>
     <th width='25%'>Nama</th>
     </tr>
     </thead>
     <tbody>
    <?php
    $sql = "SELECT * FROM ta";
    $res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
 $i++;
 echo "<tr align='center'>
 <td>$i</td>
 <td><a href='ta_detail.php?id=".$dat['id']."'>Edit</a></td>
 <td>".$dat["id"]."</td>
 <td>".$dat["nama"]."</td>
 </tr>";
}
}
?>
 </tbody>
</table>
</body>
</html>