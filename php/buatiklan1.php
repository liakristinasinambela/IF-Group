<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buat Iklan</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="kost.css" rel="stylesheet" type="text/css" />

</head>

<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
         <?php include("header.php"); ?>
		 <!-- End Header -->
		 
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn">
                    <form method="post" action="buatiklan.php" enctype="multipart/form-data" >
                        <a><b>Pemesanan Kamar:</b></a><br />
                        <input name="Nama_Kost" type="text" placeholder="Nama kost"/><br />
                        <textarea name="Alamat_Kost" placeholder="Alamat Kost"></textarea>
                        <br />
                        <input name="Jenis_Kamar" type="text" placeholder="jenis kamar"/>
                        <input type="text" name="tarif" placeholder="Tarif Kost" />
                        <input type="text" name="qty" placeholder="Banyak Kamar"/>
                        <textarea name="fasilitas"placeholder="Fasilitas Kamar"></textarea><br />
                       <input type="submit" value="Save" />		<input type="submit" value="Selesai" />
                     
                </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Content Column -->
		       <div id="content">
                   <label for="kost">Upload Gambar Kost : </label><br /><input type="file" name="foto_kost" placeholder="Upload gambar" /><br />
                   <label for="kamar">Upload Gambar Kamar : </label><br /><input type="file" name="foto_kamar" placeholder="Upload gambar" />
             		 
                    </form>
		       </div>
		       <!-- End Content Column -->
			   
			   
			   
			   <!-- Begin Right Column -->
		       <div id="rightcolumn">
		 
		             
							
							
		       </div>
		       <!-- End Right Column -->

         </div>	   
         <!-- End Faux Columns --> 

         <!-- Begin Footer -->
         <?php include("footer.php") ?>
		 <!-- End Footer -->
		 
   </div>


</body>
</html>