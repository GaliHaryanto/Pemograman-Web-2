<?php 
$sever ='localhost';
$usernm ='root';
$pass = '109484';
$db = 'bukutamu';

$conn = mysqli_connect("localhost","root","109484","bukutamu");   
?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = sprintf("SELECT * FROM tamu WHERE id='$id'");

$result = mysqli_query($conn,"SELECT * FROM tamu ORDER BY id DESC");
while ($res = mysqli_fetch_array($result))
{
    $a=$res['nama'];
    $b=$res['alamat'];
    $c=$res['gender'];  
    $d=$res['pesan']; 
}
?>


<html>
</head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div id="container">
		<h1>Buku Tamu</h1>
		<h4>Silahkan isi buku tamu di bawah ini dan Tinggalkan Pesan!</h4>
 <form action="" method="post">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" placeholder="Nama Lengkap" required /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat" placeholder="Nama jalan No XX, Kota, Provinsi" required /></p>
     
            <b>Jenis Kelamin :</b> <br>
			<input type="radio" name="gender" value="Pria" checked>Pria
            <input type="radio" name="gender" value="Wanita">Wanita
     
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Hai, Semangat terus" required></textarea></p>
     
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
            
		</form>
        <p><a href="lihat.php"><h4>Lihat Data</h4></a></p>
        
        <?php
        if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $a=$_POST['nama'];
    $b=$_POST['alamat'];
    $c=$_POST['gender'];  
    $d=$_POST['pesan']; 
    
    // checking empty fields
    if (empty($a) || empty($b) || empty($c) || empty($d)) {            
        if(empty($a)) {
            echo "<font color='red'>Nama tidak ada.</font><br/>";
        }
        
        if(empty($b)) {
            echo "<font color='red'>Alamat tidak ada.</font><br/>";
        }
        
        if(empty($c)) {
            echo "<font color='red'>Jenis Kelamin tidak ada.</font><br/>";
        }   
        if(empty($d)) {
            echo "<font color='red'>Pesan tidak ada.</font><br/>";
        }  
    } else {    
        $result = mysqli_query($conn,"UPDATE tamu SET nama='$a',alamat='$b',gender='$c',pesan='$d' WHERE id=$id");
        
        echo '<script language="javascript">alert("Terima kasih, data Anda berhasil di Update"); document.location="lihat.php";</script>';
    }
}

?>
        
	</div>

</body>

</html>