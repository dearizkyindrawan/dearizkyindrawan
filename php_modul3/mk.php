<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Mata kuliah</title>
</head>
<body>
    <h2 align="center">Mata Kuliah</h2>
    <a href="mk.php">LIHAT</a> | <a href="mk_add.php">TAMBAH</a>
    <table width='100%' border='1'>
     <thead>
     <tr>
     <th width='2%'>No.</th>
     <th width='5%'>Act</th>
     <th width='15%'>Kode</th>
     <th width='25%'>Nama</th>
     </tr>
     </thead>
     <tbody>
    <?php
    $sql = "SELECT * FROM mk";
    $res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
 $i++;
 echo "<tr align='center'>
 <td>$i</td>
 <td><a href='mk_detail.php?kode=".$dat['kode']."'>Edit</a></td>
 <td>".$dat["kode"]."</td>
 <td>".$dat["nama"]."</td>
 </tr>";
}
}
?>
 </tbody>
</table>
</body>
</html>