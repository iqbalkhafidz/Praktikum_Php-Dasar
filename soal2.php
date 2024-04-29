<?php
// Deklarasi variabel jumlah uang yang akan diambil
$jumlahUang = 1387500;

// Deklarasi array untuk menyimpan nilai pecahan uang dan jumlahnya
$pecahanUang = array(
    100000 => 0, // jumlah awal uang pecahan Rp. 100.000,-
    50000 => 0,  // jumlah awal uang pecahan Rp. 50.000,-
    20000 => 0,  // jumlah awal uang pecahan Rp. 20.000,-
    10000 => 0,  // jumlah awal uang pecahan Rp. 10.000,-
    5000 => 0,   // jumlah awal uang pecahan Rp. 5.000,-
    2000 => 0,   // jumlah awal uang pecahan Rp. 2.000,-
    500 => 0     // jumlah awal uang pecahan Rp. 500,-
);

// Looping untuk menghitung banyaknya masing-masing pecahan uang
foreach ($pecahanUang as $nilai => $jumlah) {
    // Menghitung banyaknya pecahan uang dengan mengurangi nilai uang yang akan diambil dengan nilai pecahan
    $jumlahPecahan = floor($jumlahUang / $nilai);
    
    // Mengupdate nilai jumlah uang pada array pecahanUang
    $pecahanUang[$nilai] = $jumlahPecahan;
    
    // Mengurangi jumlah uang yang akan diambil dengan nilai pecahan yang sudah dihitung
    $jumlahUang -= $jumlahPecahan * $nilai;
}

// Cetak hasil
echo "Ani akan mendapatkan pecahan uang sebagai berikut:<br>";
foreach ($pecahanUang as $nilai => $jumlah) {
    echo "Rp. " . number_format($nilai) . ",- : " . $jumlah . " lembar<br>";
}
?>
