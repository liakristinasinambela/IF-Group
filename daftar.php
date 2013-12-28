<?php
$user_name=$_POST['User_Name'];
$nama_depan=$_POST['Nama_Depan'];
$nama_belakang=$_POST['Nama_Belakang'];
$email=$_POST['email'];
$password=$_POST['password'];
$jenis_kelamin=$_POST['JK'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("kostonline",$con);
$sql="insert into user VALUES('$user_name','$nama_depan','$nama_belakang','$email','$password','$jenis_kelamin')";
$bar = mysql_query($sql,$con);
if(!$bar) {
	?>
	
		<script type='text/javascript'>
		alert("Daftar Gagal Tersimpan");
		window.setTimeout("window.location='home.php';",2);
		</script>
		<?php
		}
		else {
		?>
		<script type='text/javascript'>
		alert("Daftar Berhasil Tersimpan");
		window.setTimeout("window.location='home.php';",2);
		</script>
		<?php
		}
		?>