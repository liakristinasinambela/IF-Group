<?php
session_start(); //memulai session
include "Koneksi.php";//mengambil isian username dan password dari form
$user_name = $_POST['username'];
$password = $_POST['password'];
if ($user_name == "" or $password == "")
{
echo "<script type='text/javascript'>"."window.alert('User name dan password masih kosong')"."</script>";
}
else{
//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM user WHERE user_name = '$user_name' ";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
//cek kesesuaian password masukan dengan database
if ($password == $data['password']) {
//menyimpan tipe user dan username dalam session
$_SESSION['user_name'] = $data['username'];
//header ("location:header.php");
header ("location:home.php");

}
//jika password tidak sesuai
else {
$warning = "Username / Password Salah";
echo $warning;
}
}
?> 