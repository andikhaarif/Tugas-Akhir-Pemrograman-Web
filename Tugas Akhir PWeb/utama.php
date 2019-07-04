<html>
<head>
<title> Halaman Utama </title>
<style type="text/css">
	
</style>
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Style Css -->
	<script language="javascript" src="js/javascript.js"></script> <!-- Style Javascript -->

</head>

<body>
<div class="header"> <!--digunakan untuk membuat header pada web -->
	<br><br> <!--digunakan untuk memberikan garis baru pada web -->
	<center> <!--digunakan untuk membuat tilisan ke tengah -->
	<marquee width="100%" height ="80%" behavior="alternate" direction="right"> <!--digunakan untuk membuat teks berjalan -->
		<font color="black"size="20"> Tugas Akhir Pemrograman Web </font></marquee><br><br></center> <!--digunakan untuk membuat judul diheader -->

<script src="js/javas.js"></script> <!--style javascript -->

<div class="menubar"> <!--digunakan untuk membuat menu bar -->
	<ul></ul>
</div>

<br>
<center><h1> Hello There! </h1> <!--digunakan untuk membuat tulisan/isi konten web -->

</body>
<br><br><br><br><br><br>
<a aling="center" href="formmasuk.html" class="btn btn-primary btn-lg"> Klik Disini Untuk Lanjut! </a> <!--digunakan sebagai lompatan menuju kelink yang tertera -->
<br><br><br>

<?php 
$filecounter="hitung.txt";				//kode php ini digunakan untuk menghitung jumlah pengunjung
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fl);
$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>

<br><br><br>
<div class="footer"> <!--digunakan untuk membuat footer -->
	<br>
		<b> &copy </b> <font>&nbsp Andikha Arif EkaPutra - Universitas Ahmad Dahlan - <b> 2019 </b></font>
</div>

</body>
</html>