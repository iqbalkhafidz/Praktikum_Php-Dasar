<?php
// Deklarasi array asosiatif untuk menyimpan data poin siswa
$dataSiswa = array(
    1 => array("poin" => 75, "siswa" => "Andi"),
    2 => array("poin" => 80, "siswa" => "Joni"),
    3 => array("poin" => 65, "siswa" => "Jihan"),
    4 => array("poin" => 70, "siswa" => "Aya"),
    5 => array("poin" => 85, "siswa" => "Ita"),
    6 => array("poin" => 90, "siswa" => "Budi"),
    7 => array("poin" => 95, "siswa" => "Tini"),
    8 => array("poin" => 65, "siswa" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "a) Poin siswa dengan nomor urut 5: " . $dataSiswa[5]['poin'] . "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Nama siswa yang memiliki poin 90:<br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo $siswa['siswa'] . "<br>";
    }
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "c) Nama siswa yang memiliki poin 100:<br>";
$siswaDenganPoin100 = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 100) {
        echo $siswa['siswa'] . "<br>";
        $siswaDenganPoin100 = true;
    }
}

if (!$siswaDenganPoin100) {
    echo "Tidak ada siswa dengan poin 100.";
}
?>
