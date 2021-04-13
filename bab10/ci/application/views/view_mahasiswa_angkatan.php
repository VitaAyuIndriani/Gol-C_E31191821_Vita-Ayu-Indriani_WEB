<html>
<head><title> </title></head>
<body> =================================TABEL MAHASISWA=================================
<br>
<br>
		<table border="1"><tr>
			<td width="50"><center><b>No</b></center></td>
			<td width="50"><center><b>Angkatan</b></center></td></tr>

			<?php foreach($Mahasiswa as $row) {?>
			<tr>
				<td><?php echo $row['no']; ?></td>
				<td><?php echo $row['angkatan']; ?></td>
			</tr>

		<?php } ?>
		</table>
	</body>
</html>