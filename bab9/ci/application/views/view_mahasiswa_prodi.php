<html>
<head><title> </title></head>
<body> =================================TABEL MAHASISWA=================================
<br>
<br>
<!--Nama:<?php //echo $nama;?> <br/>
Prodi:<?php //echo $prodi;?> <br/>-->
		<table border="1"><tr>
			<td width="50"><center><b>No</b></center></td>
			<td width="50"><center><b>Prodi</b></center></td>
			<td width="50"><center><b>Keterangan</b></center></td></tr>

			<?php foreach($Mahasiswa as $row) {?>
			<tr>
				<td><?php echo $row['no']; ?></td>
				<td><?php echo $row['prodi']; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
			</tr>

		<?php } ?>
		</table>
	</body>
</html>