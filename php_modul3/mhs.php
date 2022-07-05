<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>mhs</title>
</head>
<body>
    <h2>Mahasiswa</h2>
    <?php include 'menu.php';?>
    <table width='100%' border='1'>
     <thead>
     <tr>
     <th width='5%'>No.</th>
     <th width='5%'>Act</th>
     <th width='10%'>NPM</th>
     <th width='10%'>Nama</th>
     <th width='10%'>Alamat</th>
     </tr>
     </thead>
     <tbody>
    <?php
    $sql = "SELECT * FROM mhs";
    $res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
 $i++;
 echo "<tr>
 <td>$i</td>
 <td><a href='mhs_detail.php?npm=".$dat['npm']."'>Edit</a></td>
 <td>".$dat["npm"]."</td>
 <td>".$dat["nama"]."</td>
 <td>".$dat["alamat"]."</td>
 </tr>";
}
}
?>
 </tbody>
</table>
</body>
</html>