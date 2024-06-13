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
    ['nis' => '001', 'nama' => 'Moes', 'rombel' => 'XII-A'],
    ['nis' => '002', 'nama' => 'Aditya', 'rombel' => 'XII-B'],
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