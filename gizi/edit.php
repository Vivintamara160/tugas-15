<?php 
require '../fungsi.php';
$su=$_GET['no2'];
$se=mysqli_query($koneksi,"SELECT * FROM gizi WHERE idlayanan='$su'");


if (isset($_POST['kirim'])) {
	if (ubah2($_POST)>0) {
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
 	<?php while ($row=mysqli_fetch_assoc($se)): {
 	} ?>
 	<table>
 		<tr>
 			
 		<td><input type="hidden" name="a" value="<?php echo $row['idlayanan']; ?>"></td>
 		</tr>

 		<tr>
 			<td>norm</td>
 			<td><input type="text" name="b"
 				minlength="15" maxlength="20" value="<?php echo $row['norm']; ?>"></td>
 		</tr>
 		<td></td>
 		</tr>
 		<tr>
 			<td>waktulayanan</td>
 			<td><input type="datetime-local" name="c" value="<?php echo $row['waktulayanan']; ?>" 
 			></td>
 		</tr>
 		<tr>
 			<td>diet</td>
 			<td><input type="text" name="d" value="<?php echo $row['diet']; ?>"></td>
 		</tr>
 		
		<tr>
			<td></td>
			<td><button type="submit" name="kirim">kirim</button></td>
		</tr>
 	</table>
<?php endwhile
; ?>
 </form>
 </body>
 </html>