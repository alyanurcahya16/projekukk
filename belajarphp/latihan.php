<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Informasi Siswa</title>
</head>
<body>
<h3>BELAJAR</h3>
<?php
// Data siswa (contoh, bisa diambil dari database)
$siswa = [
    ['nis' => '12309515', 'nama' => 'Alya Nurcahya Pratiwi', 'rombel' => 'XII-A'],
    ['nis' => '002', 'nama' => 'Siti', 'rombel' => 'XII-B'],
    ['nis' => '003', 'nama' => 'Umi', 'rombel' => 'XII-B'],
    ['nis' => '004', 'nama' => 'Hedsot', 'rombel' => 'XII-B'],
    ['nis' => '005', 'nama' => 'Ropeah', 'rombel' => 'XII-B'],
    // Tambahkan lebih banyak siswa jika diperlukan
];

// Mencetak informasi siswa
foreach ($siswa as $data) {
    echo "<p>NIS: {$data['nis']}</p>";
    echo "<p>Nama: {$data['nama']}</p>";
    echo "<p>Rombel: {$data['rombel']}</p>";
    echo "<hr>";
}
?>

</body>
</html>