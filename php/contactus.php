<?php session_start();  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../css/kost.css" rel="stylesheet" type="text/css" />
<link href="../css/css.css" rel="stylesheet" type="text/css" />


</head>


<body>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
        <script type="text/javascript">
		$(function() {
			<?php	if(isset($_SESSION['user_name'] )){?>
			      $('#rightcolumn1').hide();
				<?php  }else{?>
				  $('#rightcolumn1').show();
				  <?php } ?>
				  
		});
</script> <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
			<?php 
				include("header.php");
            ?>         
		 <!-- End Header -->
		 
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn"><br /><br />
               <b><a style="font-size:36px;">Data diri :</a>
               <div>Andre Febaraaf<br />11.111.2069</div><br />
               <div>Lia Kristina sinambela<br />11.111.1918</div><br />
               <div>Muhammad Hasan Sinaga<br />11.111.1250</div><br />
               <div>T. Asfa Saidillah<br />11.111.2379</div><br />
               </div>
               <div id="rightcolumn1">
           
                </div>
           </div>
           <?php include("footer.php") ?>
</div>
</body>

</html>
