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
            <input type="radio" name="gender" value="Wanita" >Wanita
     
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Hai, Semangat terus" required></textarea></p>
     
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
            
		</form>
        <p><a href="lihat.php"><h4>Lihat Data</h4></a></p>
        
        
        <?php
		if(isset($_POST['go'])){
            $sever ='localhost';
            $usernm ='root';
            $pass = '109484';
            $db = 'bukutamu';

		$conn=	mysqli_connect("localhost","root","109484","bukutamu");
  

			$nama	= $_POST['nama'];
			$alamat	= $_POST['alamat'];
			$gender	= $_POST['gender'];
			$pesan	= $_POST['pesan'];

			if($nama && $alamat && $gender && $pesan){
                
					$in = mysqli_query($conn,"INSERT INTO tamu VALUES(NULL,'$nama','$alamat','$gender','$pesan')");
					if($in){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
					}else{
						echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
					}
                }
            
            else {
				echo '<div id="error">Uppsss...! Lengkapi form!</div>';
			}
		}
		?>
        
	</div>

</body>
</html>
