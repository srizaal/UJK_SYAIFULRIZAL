<?php
require 'fungsi-siapfile.php';
// Menguji variabel nama yg dikirimkan dari HTML
if(isset($_POST['nama'])){
    // Deklarasi database sebagai file
    define('Database', 'data-crud.txt');
    // Jika ditemukan file, panggil file, tentukan format data
    // dan mode tulis dengan pointer diakhir file
    if(!file_exists(Database)){
        siapFile(
            Database, 
            "No|Nama|Email".PHP_EOL, 
            'a');
    }
// Panggil file dengan tingkah laku
// 2: FILE_IGNORE_NEW_LINES
// 3: FILE_SKIP_EMPTY_LINES
$panggilDB = @file(Database, 2 | 4);
// Membuat no urut pada format kolom
$no_urut = explode(
    "|",
    $panggilDB[count($panggilDB) - 1]);

// Menyimpan data pada variabel
$id = (int)$no_urut[0]+1;
$nama = $_POST['nama'];
$email = $_POST['email'];
// Simpan data pada file
siapFile(
    Database, "$id | $nama | $email ".PHP_EOL, 'a');
// Kembali ke file index.php
header('location: index.php');
// Keluar
exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/style.css">
    <title>Form Input</title>
</head>

<body>
    <h4 style="margin-left:490px; margin-top:100px;">Halaman Form Input</h4>
    <form action="" method="POST" class="center">
        <table border="1">
            <tr>
                <th bgcolor="black" style="width: 150px; padding: 10px;"><a href="tambah.php" style="color: white">Form Input</a></th>
                <th bgcolor="black" style="width: 150px; padding: 10px;"><a href="index.php" style="color: white">Data Tamu</a></th>
                <th style="width: 1000px; padding: 10px; background-color: black; "><a href="skenario1.php" style="color: white">Skenario 1</a></th>
            </tr>
            <tr>
                <th colspan="3" >
                    <center><div style="margin: 50px; font-size:20px;"><b>FORM INPUT DATA TAMU<br><b></div>
                        <div class="form-group row" style="margin: 50px;">
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama"">
                            </div>
                        </div>
                        <div class="form-group row" style="margin: 50px;">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" value="Simpan" style="margin-bottom: 50px;">
                        </div>
                    </center> 
                </th>
            <tr>

</tr>
        </table>
    </form>
</body>

</html>

<!-- <tr>
    <th colspan="4" bgcolor="black" style="color: white;">abdlkadsjalksdlsjdlksad</th>
</tr> -->