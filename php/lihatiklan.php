<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="kost.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <!-- Begin Wrapper --><?php
 $con = mysql_connect ("localhost","root","");
mysql_select_db("kostonline",$con);?>
   <div id="wrapper">
   
         <!-- Begin Header -->
			<?php 
				include("header.php");
            ?>         
		 <!-- End Header -->
		 
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		    <center> <h1>test</h1></center>
            <?php

 //get the nama value from form
$q = "SELECT * FROM buatiklan ORDER BY Nama_kost  "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Nama kost</td>
<td>alamat</td>
<td>Jenis kamar</td>
<td>Tarif kamar</td>
<td>Banyak kamar</td>
<td>Fasilitas kamar</td>
<td>Gambar Kost</td>
<td>Gambar kamar</td>

</tr>";
while ($data = mysql_fetch_array($result)) { //fetch the result from query into an array
echo "
<tr>
<td>".$data['Nama_Kost']."</td>
<td>".$data['Alamat_Kost']."</td>
<td>".$data['Jenis_Kamar']."</td>
<td>".$data['Tarif_Kamar']."</td>
<td>".$data['Banyak_Kamar']."</td>
<td>".$data['Fasilitas_Kamar']."</td>
<td><img width ='100px' height='100px' src='".$data['Gambar_Kost']."'></td>
<td><img width ='100px' height='100px' src='".$data['Gambar_kamar']."'></td>
</tr>";
}
echo "</table>";
?>
		     
           </div>
           <?php include("footer.php") ?>
</body>
</html>
