<?php
// Membuat array asosiatif
$data_umur = array(
    "Agus" => 20,
    "Shinta" => 25,
    "Riska" => 18
);

// Mengurutkan array berdasarkan nilai umur
ksort($data_umur);

// Menampilkan data umur yang sudah diurutkan
foreach ($data_umur as $nama => $umur) {
    echo "$nama : $umur, <br>";
}
?>