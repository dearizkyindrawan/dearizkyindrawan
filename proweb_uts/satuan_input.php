<?php include "connect_db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>input satuan</title>
</head>
<body>
<h1>tambah database satuan</h1>
<a href="satuan_input.php" class="btn third">input</a> <a href="satuan.php" class="btn third">database utama</a> <a href="landing_page.php" class="btn third">halaman utama</a><br><br>
<form action="satuan_proses.php" method="post">
	ID <br>
	<input type="text" name="id"><br>
	Nama <br>
	<input type="text" name="nama"><br>
	<input type="submit" name="proces" value="SAVE">
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