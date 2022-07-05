<?php 
include "con_db.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 <h2 align="center">DATA MAHASISWA</h2>
 <h3 align="center">tahun ajaran 2022/2023</h3>
 <a href="tambah_mhs.php">Input Mahasiswa</a><br>
 <br>
 <table border="1" cellspacing="1" cellpadding="6" align="center"> 
 <tr bgcolor="yellow">
 	<td align="center">No.</td>
 	<td align="center">id</td>
 	<td align="center">id_prodi</td>
 	<td align="center">id_mk</td>
 	<td align="center">nim</td>
 	<td align="center">nama</td>
 	<td align="center">alamat</td>
 	<td align="center">tools</td>
 </tr>
 <?php 
 $query = mysqli_query($connect, "SELECT * FROM mhs"); 
$no=1;
while($data = mysqli_fetch_array($query)){
 ?><tr>
 	<td><?=$no++?></td>
 	<td><?=$data['id']?></td>
 	<td><?=$data['id_prodi']?></td>
 	<td><?=$data['id_mk']?></td>
 	<td><?=$data['nim']?></td>
 	<td><?=$data['nama']?></td>
 	<td><?=$data['alamat']?></td>
 	<td><a href="edit.php?id=$data['id']?>">Edit</a> | <a href="hapus.php">Hapus</a></td>
 </tr><?php } ?></table>
 </body>
 </html>