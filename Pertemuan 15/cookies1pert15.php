<?php
$value = 'Galih';
$value2 = 'Galih Haryanto';
setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* expire in 1
hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookies2pert15.php'>di sini</a> untuk
pemeriksaan cookies</h2>";
?>