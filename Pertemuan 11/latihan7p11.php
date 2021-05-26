<?php
$con=mysqli_connect("localhost","root","109484");
mysqli_select_db($con,"lat_database");
$hasil=mysqli_query($con,"select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit";
?>