<html>
<head><title> </title></head>
<body> =================================TABEL MAHASISWA=================================
<br>
<br>
<!--Nama:<?php //echo $nama;?> <br/>
Prodi:<?php //echo $prodi;?> <br/>-->
		<table border="1"><tr>
			<td width="150"><center><b>Nama</b></center></td>
			<td width="150"><center><b>Prodi</b></center></td></tr>

			<?php foreach($Mahasiswa as $row) {?>
			<tr>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['prodi']; ?></td>
			</tr>

		<?php } ?>
		</table>
	</body>
</html>