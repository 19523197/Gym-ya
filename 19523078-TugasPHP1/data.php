<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pemain</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form">
	<h2 class="judul">Data Pemain</h2>
	<table border="1" cellspacing="0" cellpadding="5" width="500">
		<tr>
			<td>Nama Lengkap</td>
			<td>Tempat Lahir</td>
			<td>Tanggal Lahir</td>
			<td>Posisi</td>
			<td>Deskripsi Pemain</td>
		</tr>
		<?php
			$file_handle = fopen("datapemain.txt", "r+");

			while (!feof($file_handle) ) {
		    $line_of_text = fgets($file_handle);
		    $parts = explode(':', $line_of_text);
				echo "<tr>";
				foreach($parts as $p){
					echo "<td>".$p."</td>";
				}
				echo "</tr>";
			}
			fclose($file_handle);
		?>
	</table>
	<br>
	<a href="index.php"><button class="button">Tambah Data</button></a>
	</div>
</body>
</html>