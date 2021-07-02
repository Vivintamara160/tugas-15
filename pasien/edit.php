<?php 
require '../fungsi.php';
$su=$_GET['no'];
$se=mysqli_query($koneksi,"SELECT * FROM pasien WHERE noidpasien='$su'");


if (isset($_POST['kirim'])) {
	if (ubah($_POST)>0) {
		echo "<script> 
alert('data berhasil diedit');
document.location.href='daftar.php';
	</script>";
		exit;
	}

	else{
		echo "<script> 
alert('data gagal diedit');
document.location.href='daftar.php';
	</script>";
		exit;

	}
}








 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 	<table>
 		<?php while ($row=mysqli_fetch_assoc($se)): {
 			# code...
 		} ?>

 		<tr>
 			<td>norm</td>
 		<td><input type="text" name="a"
 		minlength="5" maxlength="10" autofocus value=" <?php echo $row['norm']; ?>" ></td>
 		</tr>

 		<tr>
 			<td>nold pasien</td>
 			<td><input type="text" name="b"
 				minlength="15" maxlength="20" value="<?php echo $row['noidpasien']; ?>"></td>
 		</tr>
 		<tr>
 			<td>jenis Id</td>
 			<td>
 				<select name="c" value="<?php echo $row['jenisid']; ?>">
 					<option>KTP</option>
 					<option>SIM</option>
 					<option>PASPOR</option>
 					<option>lain-lain</option>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>nama pasien</td>
 			<td><input type="text" name="d"
 				minlength="5" maxlength="50" value="<?php echo $row['namapasien']; ?>"></td>
 		</tr>
 		<tr>
 			<td>alamat</td>
 			<td><input type="text" name="e"
 				maxlength="100" minlength="6" value="<?php echo $row['alamat']; ?>"></td>
 		</tr>
 		<tr>
 			<td>agama</td>
 			<td>
 				<select name="f" value="<?php echo $row['agama']; ?>">
 					<option>islam</option>
 					<option>kristen</option>
 					<option>hindu</option>
 					<option>budha</option>
 					<option>konghucu</option>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>golongan darah</td>
 			<td>
 				<select name="g" value="<?php echo $row['golongandarah']; ?>">
 					<option>A</option>
 					<option>B</option>
 					<option>AB</option>
 					<option>O</option>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>tanggal lahir</td>
 			<td><input type="date" name="h" value="<?php echo $row['tanggallahir']; ?>"></td>
 		</tr>
 		<tr>
 			<td>jenis kelamin</td>
 			<td>
 				<select name="i" value="<?php echo $row['jeniskelamin']; ?>">
 					<option>laki-laki</option>
 					<option>perempuan</option>
 				</select>
 			</td>
		</tr>
		<tr>
			<td>waktu daftar</td>
			<td><input type="datetime-local" name="j" value="<?php echo $row['waktudaftar']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="kirim">kirim</button></td>
		</tr>
	<?php endwhile; ?>
 	</table></form>
 </body>
 </html>