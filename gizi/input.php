<?php 
 require '../fungsi.php';
if (isset($_POST['kirim'])) {
	if (tambah2($_POST)>0) {


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
 		<td><input type="hidden" name="a"></td>
 		</tr>

 		<tr>
 			<td>norm</td>
 			<td><input type="text" name="b"
 				minlength="15" maxlength="20"></td>
 		</tr>
 		<td></td>
 		</tr>
 		<tr>
 			<td>waktulayanan</td>
 			<td><input type="datetime-local" name="c"
 			></td>
 		</tr>
 		<tr>
 			<td>diet</td>
 			<td><input type="text" name="d"></td>
 		</tr>
 		
		<tr>
			<td></td>
			<td><button type="submit" name="kirim">kirim</button></td>
		</tr>
 	</table></form>
 </body>
 </html>