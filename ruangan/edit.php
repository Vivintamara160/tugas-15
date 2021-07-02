<?php 
require '../fungsi.php';
$su=$_GET['no1'];
$se=mysqli_query($koneksi,"SELECT * FROM ruangan WHERE norm='$su'");


if (isset($_POST['kirim'])) {
	if (ubah1($_POST)>0) {
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
 			<td>noruangan</td>
 		<td><input type="text" name="a"
 		minlength="5" maxlength="10" autofocus  value="<?php echo $row['norm']; ?>"></td>
 		</tr>

 		<tr>
 			<td>norm</td>
 			<td><input type="text" name="b"
 				minlength="15" maxlength="20" value="<?php echo $row['noruangan']; ?>"></td>
 		</tr>
 		<td></td>
 		</tr>
 		<tr>
 			<td>waktumasuk</td>
 			<td><input type="datetime-local" name="c" value="<?php echo $row['waktumasuk']; ?>" 
 			></td>
 		</tr>
 		<tr>
 			<td>waktukeluar</td>
 			<td><input type="datetime-local" name="d" value="<?php echo $row['waktukeluar']; ?>"></td>
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