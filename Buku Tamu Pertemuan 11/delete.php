<?php 
            $sever ='localhost';
            $usernm ='root';
            $pass = '109484';
            $db = 'bukutamu';

            $conn = mysqli_connect("localhost","root","109484","bukutamu");;

?>

<?php

$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM tamu WHERE id=$id");
header("Location:lihat.php");


?>



