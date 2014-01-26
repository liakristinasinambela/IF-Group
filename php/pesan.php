
 <?php 
 error_reporting(0);

$username =$_POST['username']; 
$Nama_Kost=$_POST['Nama_Kost'];
$Alamat_Kost=$_POST['Alamat_Kost'];
$Jenis_Kamar=$_POST['Jenis_Kamar'];
$Tarif_Kamar=$_POST['tarif'];

$con = mysql_connect ("localhost","root","");
mysql_select_db("kostonline",$con);
$bar = mysql_query($sql,$con);
$sql="insert into pesan VALUES('','$username','$Nama_Kost','$Alamat_Kost','$Jenis_Kamar','$Tarif_Kamar')";
$res=mysql_query($sql) or die (mysql_error());
if(!$bar) {
	?>
 <?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesan berhasil</title>

</head>

<body>
<strong></strong>
   <!-- Begin Wrapper -->
   <div id="wrapper">
         <!-- Begin Header -->
         <?php include("header.php"); ?>
		 <!-- End Header -->
		
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn">
                        <a><b>Pesan Berhasil</b></a><br />
                        <input name="Nama_Kost" type="text" value="<?php echo $Nama_Kost;?>" readonly="readonly"/><br />
                        <textarea name="Alamat_Kost" readonly="readonly"><?php echo $Alamat_Kost;?></textarea>
                        <br />
                        <input name="Jenis_Kamar" type="text" value="<?php echo $Jenis_Kamar;?>" readonly="readonly"/>
                        <input type="text" name="tarif" value="<?php echo $Tarif_Kamar;?>" readonly="readonly"/>
                        
                       <p>Segera datang ketempat Kost untuk proses selanjutnya. Lewat 2*24 jam pemesanan dibatalkan</p>
                     
                </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Content Column -->
		                    		 
                    </form>
		       
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
	<?php

		}
		?>
 
