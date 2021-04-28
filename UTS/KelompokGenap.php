<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Genap</title>
</head>

<body>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td>
                    <h2>Masukkan Data Pasien</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table border="1">
                        <tr>
                            <tr> <td><select name="Wilayah">
                            <option value="DKI JAKARTA"> DKI JAKARTA</option>
                            <option value="JAWA BARAT"> JAWA BARAT</option>
                            <option value="BANTEN"> BANTEN</option>
                            <option value="JAWA TENGAH"> JAWA TENGAH</option>
                            </select></td></tr>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td><input type="text" name="positif"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dirawat</td>
                            <td><input type="text" name="dirawat"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td><input type="text" name="sembuh"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td><input type="text" name="meninggal"></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td><input type="text" name="operator"></td>
                        </tr>
                        <tr>
                            <td>NIM Mahasiswa</td>
                            <td><input type="text" name="nim"></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <center>
                                    <input type="submit" value="Simpan">
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <?php
    include "waktu.php";
    $Wilayah = $_POST['Wilayah'];
    $positif = $_POST['positif'];
    $dirawat = $_POST['dirawat'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];
    $operator = $_POST['operator'];
    $nim = $_POST['nim'];
    $waktu = date("H:i:s");


    $isi = "                Data Pemantauan Covid-19 Wilayah " . $Wilayah . "\n" .
        "                      Per " . $tgl . $month . $tahun . " " . $waktu . "\n" .
        "                       " . $operator . " / " . $nim . "\n\n" .
        "--------------------------------------------------------------------------\n" .
        "|     Positif   |     Dirawat     |     Sembuh     |   Meninggal  |\n" .
        "--------------------------------------------------------------------------\n" .
        "|      $positif     |     $dirawat        |      $sembuh      |   $meninggal        |  \n" .
        "---------------------------------------------------------------------------";

    $namafile = "data.txt";
    $file = fopen($namafile, "w");
    fwrite($file, $isi);
    fclose($file);
    ?>
    <h1> Hasil : <a href="<?php echo $namafile ?>"><?php echo $namafile; ?></a></h1>
</body>

      
     
</html>