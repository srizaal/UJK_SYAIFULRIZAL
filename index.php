<?php


define('Database', 'data-crud.txt');
if(!file_exists(Database)){
    siapFile(
        Database, "No|Nama|Email".PHP_EOL, 'a');
}

//panggil
$panggilDB= @file(Database, 2 | 4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/style.css">
    <title>Data Tamu</title>
</head>

<body>
    <h4 style="margin-left:490px; margin-top:100px;">Halaman Output (Data Tamu)</h4>
    <table class="table table-bordered center" style="padding:40px;">
            <tr>
                <th bgcolor="black" style="width: 150px; padding: 10px;"><a href="tambah.php" style="color: white">Form Input</a></th>
                <th bgcolor="black" style="width: 150px; padding: 10px;"><a href="index.php" style="color: white">Data Tamu</a></th>
                <th style="width: 1000px; padding: 10px; background-color: black; "><a href="skenario1.php" style="color: white">Skenario 1</a></th>
            </tr>
            <tr>
                <th><center>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
        </tr>
        <?php	
            $ulang=0;
            foreach($panggilDB as $baris){
                if($ulang !=0){
                    $itemData= explode('|', $baris);
                    $id= $itemData[0];
                    $nama= $itemData[1];
                    $email= $itemData[2];
        ?>
        <tr>
            <td><center><?= $id;?></center></td>
            <td><?= $nama;?></td>
            <td><?= $email;?></td>
        </tr>
        <?php 
         }
        $ulang++;
        $jumlahTotal= $ulang-1;
    }
        ?>
    </table>
</body>

</html>