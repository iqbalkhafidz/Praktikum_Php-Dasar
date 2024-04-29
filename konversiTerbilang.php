<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka menjadi Terbilang</h2>

    <form method="post">
        <label for="number">Masukkan Angka (1-9):</label>
        <input type="number" id="number" name="number" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        switch ($number) {
            case 1:
                echo "Satu";
                break;
            case 2:
                echo "Dua";
                break;
            case 3:
                echo "Tiga";
                break;
            case 4:
                echo "Empat";
                break;
            case 5:
                echo "Lima";
                break;
            case 6:
                echo "Enam";
                break;
            case 7:
                echo "Tujuh";
                break;
            case 8:
                echo "Delapan";
                break;
            case 9:
                echo "Sembilan";
                break;
            default:
                echo "Angka tidak valid!";
        }
    }
    ?>
</body>
</html>
