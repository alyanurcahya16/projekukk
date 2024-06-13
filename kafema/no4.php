<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total harga</title>
</head>
<body>
    <?php
    $barang = [
        [
            'nama_barang' => 'Pasta Gigi',
            'harga_barang' => 18000,
            'jumlah_beli' => 1,
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang' => 5000,
            'jumlah_beli' => 3,
        ],
        [
            'nama_barang' => 'Aloe Vera Sheet Mask',
            'harga_barang' => 15000,
            'jumlah_beli' => 4,
        ],
    ];

    $totalHarga = 0;
    foreach ($barang as $item) {
        $totalHarga = $totalHarga + ($item['harga_barang'] * $item['jumlah_beli']);
    }
    echo "Total harga yang harus di bayar adalah " . "<br>" . "Rp." . number_format($totalHarga, 0, ',', '.') . "</br>";
    ?>

</body>
</html>