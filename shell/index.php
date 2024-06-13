<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shell</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="input-group">
        <label for="liter">jumlah liter:</label>
        <input type="number" id="liter" name="liter">
    </div>
    <label for="jenis">pilih:</label>
    <select name="jenis" id="jenis">
        <option value="ssuper">Shell super</option>
        <option value="svpower">Shell V-power</option>
        <option value="svpowerdiesel">Shell V-power Diesel</option>
        <option value="svpowernitro">Shell V-power nitro</option>
    </select>
    <br>
    <button type="submit" name="shell">beli</button>
</form>

    <?php
    // panggil filenya
    require 'logic.php';
    //baru buka , langsung set harga
    $logic = new pembelian();
    $logic-> setharga(10000, 15000, 18000, 20000);
    if (isset($_POST['shell'])){
        $logic->jenisyangdipilih = $_POST['jenis'];
        $logic->totalliter = $_POST['liter'];
        $logic->totalharga();
        $logic->cetakbukti();
        }
    ?>
</body>
</html>