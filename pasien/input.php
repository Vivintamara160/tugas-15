<?php 
 require '../fungsi.php';
if (isset($_POST['kirim'])) {
	if (tambah($_POST)>0) {


		echo "<script> 

		alert('data berhasil ditambah');
		document.location.href='daftar.php';
		</script>
		";
		
	}

	else{

		echo "<script> 

		alert('data gagal ditambah');
		document.location.href='daftar.php';
		</script>
		";
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
 		<tr>
 			<td>norm</td>
 		<td><input type="text" name="a"
 		minlength="5" maxlength="10" autofocus ></td>
 		</tr>

 		<tr>
 			<td>nold pasien</td>
 			<td><input type="text" name="b"
 				minlength="15" maxlength="20"></td>
 		</tr>
 		<tr>
 			<td>jenis Id</td>
 			<td>
 				<select name="c">
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
 				minlength="5" maxlength="50"></td>
 		</tr>
 		<tr>
 			<td>alamat</td>
 			<td><input type="text" name="e"
 				maxlength="100" minlength="6"></td>
 		</tr>
 		<tr>
 			<td>agama</td>
 			<td>
 				<select name="f">
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
 				<select name="g">
 					<option>A</option>
 					<option>B</option>
 					<option>AB</option>
 					<option>O</option>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>tanggal lahir</td>
 			<td><input type="date" name="h"></td>
 		</tr>
 		<tr>
 			<td>jenis kelamin</td>
 			<td>
 				<select name="i">
 					<option>laki-laki</option>
 					<option>perempuan</option>
 				</select>
 			</td>
		</tr>
		<tr>
			<td>waktu daftar</td>
			<td><input type="datetime-local" name="j"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="kirim">kirim</button></td>
		</tr>
 	</table></form>
 </body>
 </html>