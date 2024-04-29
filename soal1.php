<?php
// Deklarasi variabel gaji pokok, tunjangan, dan persentase pajak
$gajiPokok = 3250000;
$tunjangan = 1200000;
$pajak = 0.1; // 10% dalam bentuk desimal

// Menghitung gaji kotor
$gajiKotor = $gajiPokok + $tunjangan;

// Menghitung pajak penghasilan
$pajakPenghasilan = $gajiKotor * $pajak;

// Menghitung gaji bersih
$gajiBersih = $gajiKotor - $pajakPenghasilan;

// Cetak hasil
echo "Gaji bersih yang diterima Obi setiap bulannya adalah: Rp. " . number_format($gajiBersih, 2, ',', '.') . ",-";
?>
