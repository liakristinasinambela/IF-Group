<?php require_once 'function.php';connect(); ?>
<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<link href="../css/kost.css" rel="stylesheet" type="text/css" />
<link href="../css/css.css" rel="stylesheet" type="text/css" />
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
		 
		    <center> <h1>Iklan Kost</h1></center>
<?php $iklans = getLihatiklans(); ?>
                <?php foreach ($iklans as $p ):?>
                <table>                		
                <tr><br /><td>
                           <img src="<?php echo $p['Gambar_Kost'];?>" width="100px" height="100px">
                        </td>
                        <td>
                   
                     <h2 class="widget-title"><a href="lihatiklanPesan.php?id=<?php echo $p['id'];?>"><?php echo $p['Nama_Kost'];?></a></h2>
                     <a style="font-size:20px"><?php echo $p['Alamat_Kost'];?></a><br>
                     <a style="font-size:20px"><?php echo $p['Fasilitas_Kamar'];?></a>
                      </td></tr>
                                
                 <?php endforeach ?></table>
        </div>
		     
           
           <?php include("footer.php") ?></div>
</body>
</html>
