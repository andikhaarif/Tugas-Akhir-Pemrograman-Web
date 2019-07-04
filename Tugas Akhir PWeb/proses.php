<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Style Css -->
	<script language="javascript" src="js/javascript.js"></script> <!-- Style Javascript -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script> <!-- Style css -->
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Style Javascript -->
</head>

<body>
	<div class="header"> <!--digunakan untuk membuat header pada web -->
	<br><br> <!--digunakan untuk memberikan garis baru pada web -->
	<marquee width="100%" height ="50%" direction="up" > <!--digunakan untuk membuat teks berjalan -->
		<center> <!--digunakan untuk membuat tilisan ke tengah -->
		<font color="black"size="20"> Tugas Akhir Pemrograman Web </font></marquee><br><br></center> <<!--digunakan untuk membuat judul diheader -->
<br><br><br><br>
<div class="menubar"> <!--digunakan untuk membuat menu bar -->
	<ul></ul>
</div>

<div class="jumbotron">

<?php
echo "<head><title> Proses </title></head>";		//kode php ini sebagai indikator jika data di form masuk telah disubmit dan																		berhasil disimpan dalam bentuk .txt
$fp = fopen("pengunjung.txt","a+");
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$email = $_POST['email'];


fputs($fp,"$nama|$usia|$email\n");
fclose($fp);
echo "<h1><p align=center> Data Telah Di Masukkan! </h1>";
echo "<h1><p align=center> Terima Kasih Telah Berpartisipasi! </h1><br><br><br><br><br><br>";
echo "<br><br><a class=btn href=home.html> Klik Disini Untuk Melanjutkan! </a><br>"; //digunakan sebagai lompatan menuju kelink yang tertera

?>
</div>

<div class="footer"> <!--digunakan untuk membuat footer -->
	<br>
		<b> &copy </b> <font>&nbsp Andikha Arif EkaPutra - Universitas Ahmad Dahlan - <b> 2019 </b></font>
</div>

</body>
</html>