<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Masukkan nilai angka: <input type="text" name="nilai">
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Fungsi untuk konversi nilai angka ke huruf
    function konversiNilai($nilai) {
        if ($nilai >= 90 && $nilai <= 100) {
            return "A";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return "AB";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            return "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            return "BC";
        } elseif ($nilai >= 0 && $nilai <= 59) {
            return "C";
        } else {
            return "Nilai tidak valid";
        }
    }

    // Memproses form jika sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        // Memanggil fungsi konversiNilai untuk mendapatkan nilai huruf
        $nilai_huruf = konversiNilai($nilai);
        echo "<p>Nilai angka $nilai setara dengan nilai huruf: $nilai_huruf</p>";
    }
    ?>

</body>
</html>
