<!DOCTYPE html>
<html>

<head><title>Controller dan View lebih dari 1 Variabel</title></head>
<body>

	<h2>Mengirim Data dari Controller ke View</h2>

	<?php
	foreach ($tampil as $row) {
		echo "Nama: " . $row['Nama'];
		echo "NIM: " . $row['NIM'];
		echo "Golongan: " . $row['Gol'];
	}
</body>
</html>
© 2021 GitHub, Inc.