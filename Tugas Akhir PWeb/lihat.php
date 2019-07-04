<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script> <!-- Style Css -->
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Style Javascript -->
</head>

<?php
echo "<head><title> Data Pengunjung </title></head>";		//kode php ini digunakan untuk membukan file txt yang kemudian akan ditampilkan
$fp = fopen("pengunjung.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td> Nama </td><td> : $pisah[0]</td></tr>";
echo "<tr><td> Usia </td><td> : $pisah[1]</td></tr>";
echo "<tr><td> Email </td><td>: $pisah[2]</td></tr><tr>
<td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";

}
echo "</table>";

?>

</html>