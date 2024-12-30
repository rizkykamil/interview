<?php

function hitungGaji($golongan, $jamKerja)
{

    $upahPerJam = [
        1 => 3000,
        2 => 3500,
        3 => 4000,
        4 => 5000
    ];


    if (!isset($upahPerJam[$golongan])) {
        return false;
    }
    $upah = $upahPerJam[$golongan];


    if ($jamKerja <= 40) {
        $gaji = $jamKerja * $upah;
    } else {
        $lembur = $jamKerja - 40;
        $gaji = (40 * $upah) + ($lembur * $upah * 1.5);
    }

    return $gaji;
}


echo "Masukkan golongan (1-4): ";
$golongan = intval(trim(fgets(STDIN)));

echo "Masukkan jam kerja: ";
$jamKerja = intval(trim(fgets(STDIN)));


$gajiMingguan = hitungGaji($golongan, $jamKerja);

if ($gajiMingguan === false) {
    echo "Golongan tidak valid!\n";
} else {
    echo "Gaji mingguan: Rp " . number_format($gajiMingguan, 0, ',', '.') . "\n";
}
?>