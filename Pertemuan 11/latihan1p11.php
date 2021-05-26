<?php
// hostname or ip of server
$servername='localhost';
// username and password
$dbusername='root';
$dbpassword='109484';
$link=mysqli_connect("localhost","root","109484");
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if ($link)
{
 echo "ok....koneksi berhasil";
}
?>