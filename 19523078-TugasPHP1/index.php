<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pemain</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box-form">
		<h2 class="judul">Data Pemain</h2>
		<form action="" method="post">
			<table border="0", cellspacing="0", cellpadding="5">
				<tr>
					<td><label for="">Nama Lengkap</label></td>
					<td><input type="text" name="nama"></td>				
				</tr>
				<tr>
					<td><label for="">Tempat Lahir</label></td>
					<td><input type="text" name="tempat"></td>				
				</tr>
				<tr>
					<td><label for="">Tanggal Lahir</label></td>
					<td><input type="date" name="lahir"></td>
				</tr>
				<tr>
					<td><label for="">Posisi</label></td>
					<td><select name="posisi">
						<option value="kiper">Kiper</option>
						<option value="bek">Bek</option>
						<option value="gelandang">Gelandang</option>
						<option value="penyerang">Penyerang</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="deskripsi">Deskripsi Pemain</label></td>
					<td><textarea name="deskripsi"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" class="button" value="Simpan"></td>
				</tr>
			</table>
		</form>
		<a href="data.php"><button class="button">Tampilkan Data</button></a>
	</div>

	<?php
	if(isset($_POST['submit'])){
		$data = $_POST['nama'].":".$_POST['tempat'].":".$_POST['lahir'].":".$_POST['posisi'].":".$_POST['deskripsi'];
				$openfile = fopen("datapemain.txt","a+");
				fwrite($openfile,"\n".$data);
				fclose($openfile);
			}
	?>
</body>
</html>