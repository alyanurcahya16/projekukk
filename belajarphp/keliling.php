<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh program PHP</title>
</head>
<body>
    <p>NAMA : ALYA NURCAHYA PRATIWI</p>
    <p>ROMBEL :PPLG X-5</p>
    <p>NIS : 12309515</p>
    
    <?php
    function hitungKeliling($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        if ($panjang > 0 && $lebar > 0) {
            $keliling = hitungKeliling($panjang, $lebar);
            $luas = hitungLuas($panjang, $lebar);
            echo "<p>Panjang: $panjang</p>";
            echo "<p>Lebar: $lebar</p>";
            echo "<p>Keliling: $keliling</p>";
            echo "<p>Luas: $luas</p>";           
        } else {
            echo "<p>Panjang dan lebar harus merupakan angka psitif.</p>";
        }
    }

    ?>
<from method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="panjang">Panjang:</label>
    <input type="number" name="panjang" required>
    <br>
    <label for="lebar">Lebar:</label>
    <input type="number" name="lebar" required>
    <br>
    <input type="submit" value="Hitung>
</from>
</body>
</html>