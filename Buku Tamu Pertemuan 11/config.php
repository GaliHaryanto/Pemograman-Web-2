<?php
$hostmysql = "localhost";
$username = "root";
$password = "109484";
$database = "bukutamu";
$conn = mysqli_connect("localhost","root","109484","myguest");
if ($conn){
 echo "<b> Koneksi Berhasil </b>";
}
else{
 die ("<b> Koneksi Gagal </b>");
}
?>