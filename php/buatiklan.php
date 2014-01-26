<?php
$namafolder="gambar/"; //tempat menyimpan file
$Nama_Kost=$_POST['Nama_Kost'];
$Alamat_Kost=$_POST['Alamat_Kost'];
$Jenis_Kamar=$_POST['Jenis_Kamar'];
$Tarif_Kamar=$_POST['tarif'];
$Banyak_Kamar=$_POST['qty'];
$Fasilitas_Kamar=$_POST['fasilitas'];
//$Gambar_Kost=$_POST['foto_kost'];
//$Gambar_Kamar=$_POST['foto_kamar'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("kostonline",$con);

$bar = mysql_query($sql,$con);
if (!empty($_FILES["foto_kost"]["tmp_name"])&& !empty($_FILES["foto_kamar"]["tmp_name"]))
{
        $jenis_gambar=$_FILES['foto_kost']['type'];
		$jenis_gambar1=$_FILES['foto_kamar']['type'];
	
       // $judul_gambar=$_POST['judul_gambar'];
        if(($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png") && ($jenis_gambar1=="image/jpeg" || $jenis_gambar1=="image/jpg" || $jenis_gambar1=="image/gif" || $jenis_gambar1=="image/png"))
        {                        
                $gambar = $namafolder . basename($_FILES['foto_kost']['name']);       
				 $gambar2 = $namafolder . basename($_FILES['foto_kamar']['name']);          
                if ((move_uploaded_file($_FILES['foto_kost']['tmp_name'], $gambar)) && (move_uploaded_file($_FILES['foto_kamar']['tmp_name'],  $gambar2))) {
                       // $sql="insert into tb_gambar(nama_file) values ('$gambar')";
						$sql="insert into buatiklan VALUES('$Nama_Kost','$Alamat_Kost','$Jenis_Kamar','$Tarif_Kamar','$Banyak_Kamar','$Fasilitas_Kamar','$gambar','$gambar2')";
                        $res=mysql_query($sql) or die (mysql_error());
                       //echo "Gambar berhasil dikirim ".$gambar;
                        //echo "<p>Judul Gambar : $judul_gambar</p>";                   
                       //echo "<p><img src=\"$gambar\" width=\"200\"/></p>";
	
	
					if($bar) {
					?>
					<script type='text/javascript'>
					alert("Daftar gagal Tersimpan");
					window.setTimeout("window.location='buatiklan1.php';",2);
					</script>
                    
					
					
					
					<?php            
					}else {
						?>
					<script type='text/javascript'>
                    alert("Daftar Berhasil Tersimpan");
                    window.setTimeout("window.location='buatiklan1.php';",2);
                    </script>
                    <?php
                                }
                } else {
                   echo "<p>Gambar gagal dikirim</p>";
				   
                }
   } else {
                echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
        echo "Anda belum memilih gambar";
}

/*if(!$bar) {
	?>
	
		<script type='text/javascript'>
		alert("Daftar Gagal Tersimpan");
		window.setTimeout("window.location='buatiklan1.php';",2);
		</script>
		<?php
		}
		else {
		?>
		<script type='text/javascript'>
		alert("Daftar Berhasil Tersimpan");
		window.setTimeout("window.location='buatiklan1.php';",2);
		</script>
		<?php
		}
		
		?>
*/