
<link href="kost.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
<div id="header">
		 
            <header><div id="kiri"><a href= "Home.php"> <img src="Untitled-1.png" width="95" height="80" /></a></div><!-- <form method="post" action="login.php"><input type="text" name="username" class="login" placeholder="username"><input type="password" name="password" class="login" placeholder="password">-->
 
	<?php
		if($_SESSION['user_name']=='')
 echo "<form method='post' action='login.php'><input type='text' name='username' class='login' placeholder='username'><input type='password' name='password' class='login' placeholder='password'>	<input type='submit' name='login' value='Log In' class='inout' />	";
			elseif(isset($_SESSION['user_name'] ))
			
				echo $_SESSION['user_name']."<a href='  logout.php'>logout</a>";
			
			
	
			?>
            </form></header> 
            <nav><div id="kanan"> <ul id="menu">
            <li><a href="Home.php">Home</a></li>
            <li><a href="" target="">Iklan</a>
            <ul>
            <li><a href="buatiklan1.php">Buat Iklan</a></li>
            <li><a href="lihatiklan.php">Lihat Iklan</a></li>
            </ul>
            </li>
            <li><a href="">About us</a>
            </li>
            <li><a href="">Contact us</a>
            </li></ul></div></nav>
			   
		 </div>