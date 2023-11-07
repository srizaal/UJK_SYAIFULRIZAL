<?php
    function siapFile($nama_file, $format_kolom, $mode_file){
    if(!file_exists($nama_file)) fopen ($nama_file, "w");
    $bukaFile= fopen($nama_file, $mode_file)
    or die ("Kesalahan membuka file $nama_file");
    //simpan
    fputs($bukaFile, $format_kolom);
    //tutup
    fclose($bukaFile) or die ("Kesalahan Menutup File");
}
?>