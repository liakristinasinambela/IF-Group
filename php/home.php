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
<script type="text/javascript" src="../jquery/jquery-1.3.2.js"></script>
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
               <a style="font-size:46px;">Kost Online</a><br /><br />
               <b><p style="font-size:18px">Tempat pencarian Kost secara Online, tidak perlu lagi mencari secara manual</p></b>
               <div id="test"></div>
               </div>
               <div id="rightcolumn1">
               <form method="post" action="daftar.php" name="form">
					<span><input id="form1" name="Nama_Depan" type="text" placeholder="Nama Depan" class="home"/>
                    <input id="form1" name="Nama_Tengah" type="text" placeholder="Nama Tengah" class="home"/>
                    <input name="Nama_Belakang" type="text" placeholder="Nama Belakang" class="home"/></span>
                	<input name="User_Name" type="text" placeholder="User Name anda"/>
                    <input type="text" name="email" placeholder="Email anda" />
                    <input type="password" name="password" placeholder="Password" /><br />
                  <center> <input type="radio" name="JK" onclick="hilang()" value="Laki-Laki" />Laki-laki&nbsp;&nbsp;<input type="radio" name="JK" value="Perempuan" />Perempuan<br />
                    <input type="submit" name="Daftar" class="inout" value="daftar" /></center>
                </form>
                </div>
           </div>
           <?php include("footer.php") ?>
</div>
</body>

</html>
