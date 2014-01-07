<?php require_once 'function.php'; connect(); ?>
<?php session_start();  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buat Iklan</title>

</head>

<body>
<strong></strong>
   <!-- Begin Wrapper -->
   <div id="wrapper">
    <?php $p =getLihatiklan($_GET['id']);
		echo $p['Alamat_Kost'];
		?>
    
    <?php echo $p['Alamat_Kost'];?>
         <!-- Begin Header -->
         <?php include("header.php"); ?>
		 <!-- End Header -->
		 
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn">
                    <form method="post" action="pesan.php" enctype="multipart/form-data" >
                        <a><b>Pemesanan Kamar:</b></a><br />
                        <input name="Nama_Kost" type="text" value="<?php echo $p['Nama_Kost'];?>" readonly="readonly"/><br />
                        <textarea name="Alamat_Kost" readonly="readonly"><?php echo $p['Alamat_Kost'];?></textarea>
                        <br />
                        <input name="Jenis_Kamar" type="text" value="<?php echo $p['Jenis_Kamar'];?>" readonly="readonly"/>
                        <input type="text" name="tarif" value="<?php echo $p['tarif'];?>" readonly="readonly"/>
                        <input type="text" name="qty" value="<?php echo $p['qty'];?>" readonly="readonly"/>
                        <textarea name="fasilitas"placeholder="Fasilitas Kamar"></textarea><br />
                       <input type="submit" value="Pesan" />
                     
                </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Content Column -->
		       <div id="content">
                   <label for="kost">Gambar Kost : </label><br /><br />
                   <label for="kamar">Upload Gambar Kamar : </label><br />
             		 
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
