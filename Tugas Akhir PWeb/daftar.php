<!DOCTYPE html>
<html>
<head>
	<title> Daftar Pengunjung </title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Style Css -->
	<script language="javascript" src="js/javascript.js"></script> <!-- Style Javascript -->
</head>
<body>

<div class="header"> <!--digunakan untuk membuat header pada web -->
	<br><br> <!--digunakan untuk memberikan garis baru pada web -->
	</title><marquee width="100%" height ="50%" direction="up" > <!--digunakan untuk membuat teks berjalan -->
		<center> <!--digunakan untuk membuat tilisan ke tengah -->
		<font color="black"size="20"> Tugas Akhir Pemrograman Web </font></marquee><br><br></center> <!--digunakan untuk membuat judul diheader -->
</div>

	<div class="menubar"> <!--digunakan untuk membuat menu bar -->
		<ul>
			<li><a href="home.html"><b> Home </b></a></li>
			<li><a href="author.html"><b> Author </b></a></li>
			<li><a href="kontak.html"><b> Contact </a></b></li>
			<li><a href="daftar.html"><b> Pengunjung </a></b></li>
			<li><a href="kalkulator.html"><b> Kalkulator </a></b></li>
			<li><a href="cari.html"><b> Pencarian </b></a></li>
			<form name="formcari" onSubmit="cari()"><pre>			<!--digunakan untuk membuat menubar pencarian -->
  			                                    			<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari">		
			</form></pre>
		</ul>
</div>	



<div class="menu2"> <!--digunakan untuk membuat tulisan/isi konten web -->
	<center>
	<br><br>
	<h1><font color="black"> Daftar Pengunjung </font></h1>
	<hr width="20%">
	<center>

	<?php
	$bil = 1;
	echo "<br><br><br><br><br><br><br><br><head><title>GUEST BOOK</title></head>";

	$fp = fopen("pengunjung.txt", "r");
	echo "<table border=1 width=85%>";		//kode php ini digunakan untuk menampilkan data yang awalnya telah disubmit dan disimpan di txt
	echo "<th>No. </th>";
	echo "<th>Nama </th>";
	echo "<th>Usia </th>";
	echo "<th>Email</th>";
	
	while($isi = fgets($fp,80))
	{
		$pisah = explode("|",$isi);
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td>$pisah[0]</td>";
		echo "<td>$pisah[1]</td>";
		echo "<td>$pisah[2]</td></tr>";
		
	$bil++;
	}
	echo "<br><br><br><br>";
	
	?>
	</center>
	
</div>

<div class="footer"> <!--digunakan untuk membuat footer -->
	<br>
		<b> &copy </b> <font>&nbsp Andikha Arif EkaPutra - Universitas Ahmad Dahlan - <b> 2019 </b></font>
</div>

</body>
</html>