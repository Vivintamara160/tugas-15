<?php 
require '../fungsi.php';

$ambil= mysqli_query($koneksi, "SELECT * FROM gizi");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>gizi</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style type="text/css">
*{
	margin: 0;
	padding:0;
	font-family: sans-serif;
}

  	a{
  		text-decoration: none;
  		color:blue;

  	}
.a{
	text-align: center;
	background-color: #00ff00;
}

.d{
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: green;
	text-align: center;
	color: white;

}
.r{
	position: fixed;
	right: 1%;
	top: 0.2%;
}
body{
	background-color: skyblue;
}
  </style>
 </head>
 <body>
 <div class="a">
 	<b><a href="input.php">TAMBAH DATA</a></b> || <b><a href="../ruangan/daftar.php">LAYANAN RUANGAN</a></b> || <b><a href="../pasien/daftar.php">DAFRAR PASIEN</a></b>
 	<hr>
 </div>
 <center>
 <table border="1" cellspacing="0" cellpadding="10" width="100%"> 
 	<tr>
 		<th>NO</th>
 		<th>Aksi</th>
 		<th>idlayanangizi</th>
 		<th>norm</th>
 		<th>waktulayanan</th>
 		<th>diet</th>
 		
 	</tr>
 	<tr>
 		<?php $i=1; ?>
 		<?php while ($row=mysqli_fetch_assoc($ambil)): {
 		} ?>
 		<td><?php echo $i;; ?></td>
 		<td><a href="../hapus.php?no2=<?php echo $row['idlayanan']; ?>" onclick="return confirm('yakin ingin menghapus..?')">hapus</a> <=> <a href="edit.php?no2=<?php echo $row['idlayanan'];  ?> ">edit</a></td>
 		<td> <?php echo $row['idlayanan']; ?></td>
 		<td><?php echo $row['norm']; ?></td>
 		<td><?php echo $row['waktulayanan']; ?></td>
 		<td><?php echo $row['diet']; ?></td>
 		
 	</tr>
 	<?php $i++; ?>
 <?php endwhile; ?>
 </table></center>
  <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
 <div class="d"> <p>Vivin Tamara</p> </div>
 </body>
 </html>