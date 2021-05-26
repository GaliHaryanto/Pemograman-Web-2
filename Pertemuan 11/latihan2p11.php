<?php
$link = mysqli_connect("localhost", "root", "109484");
$dbname = "lat_database";
$cek = mysqli_query($link, "CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");
if ($cek) {
    echo "Database $dbname berhasil dibuat";
}
?>