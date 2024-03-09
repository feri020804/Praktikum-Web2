<?php

$nama = $_POST['nama'];
$skill = $_POST['skill'];
$nim = $_POST['nim'];
$jk = $_POST['jk'];
$domisili = $_POST['domisili'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$skor = 0;


// buat logic nentuin skor dari skill
foreach ($skill as $s) {
    // cek skill nya
    switch ($s) {
        case 'html':
            $skor = $skor + 10;
            // atau $skor += 10;
            break;

        case 'css':
            $skor = $skor + 10;
            // atau $skor += 10;
            break;

        case 'javascript':
            $skor = $skor + 20;
            // atau $skor += 10;
            break;

        case 'bootstrap':
            $skor = $skor + 20;
            // atau $skor += 10;
            break;

        case 'php':
            $skor = $skor + 30;
            // atau $skor += 10;
            break;

        case 'python':
            $skor = $skor + 30;
            // atau $skor += 10;
            break;

        case 'java':
            $skor = $skor + 50;
            // atau $skor += 10;
            break;

        default:
            # code...
            break;
    }
}

$kategori_skill;
if ($skor >= 100 && $skor <= 150) {
    $kategori_skill = "Sangat Baik";
} elseif ($skor >= 60 && $skor <= 100) {
    $kategori_skill = "Baik";
} elseif ($skor >= 40 && $skor <= 60) {
    $kategori_skill = "Cukup";
} elseif ($skor >= 0 && $skor <= 40) {
    $kategori_skill = "Kurang";
} else {
    $kategori_skill = "Tidak Memadai";
}

?>