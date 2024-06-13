<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kasir Sederhana</title>
    </head>
    <body>
        <h2>Kasir Sederhana</h2>
        <form action="proses.php" method="post">
            <label for="item">Item:</label>
            <input type="text" id="item" name="item"><br><br>
            <label for="price">Harga:</label>
            <input type="text" id="price" name="price"><br><br>
            <label for="quantity">Jumlah:</label>
            <input type="number" id="quantity" name="quantity"><br><br>
            <input type="submit" value="Tambah ke Keranjang">
        </form>
