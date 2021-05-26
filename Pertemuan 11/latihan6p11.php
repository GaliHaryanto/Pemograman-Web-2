<?php
 $con=mysqli_connect("localhost","root","109484");
 mysqli_select_db($con,"lat_database");
 $hasil=mysqli_query($con,"select * from tbl_mhs");
 While($data=mysqli_fetch_array($hasil))
 {
 echo "$data[FirstName] $data[LastName] $data[Age]<br>";
 }
?> 