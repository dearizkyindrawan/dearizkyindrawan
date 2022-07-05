
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 <h1 align="center">Data Mahasiswa</h1>
 <a href="tambah_mhs.php">input data</a>
 <br><br><table border="1" cellpadding="6" cellspacing="1">
 	<tr bgcolor="yellow">
 		<td align="center">No.</td>
 		<td align="center">id</td>
 		<td align="center">id_prodi</td>
 		<td align="center">id_mk</td>
 		<td align="center">NIM</td>
 		<td align="center">Nama</td>
 		<td align="center">alamat</td>
 		<td align="center">tools</td>
 	</tr>
 	<?php 
 	include "con_db.php";
	$query = mysqli_query($connect, "SELECT * FROM mhs");
	$no=1;
	while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$data['id']?></td>
			<td><?=$data['id_prodi']?></td>
			<td><?=$data['id_mk']?></td>
			<td><?=$data['nim']?></td>
			<td><?=$data['nama']?></td>
			<td><?=$data['alamat']?></td>
			<td><a href="editmhs.php?id=<?=$data['id']?>">Edit</a> | <a href="hapus.php?id=<?=$data['id']?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td>
		</tr><?php } ?>
 </table>
 </body>
 </html>