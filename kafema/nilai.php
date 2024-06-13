<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
<?php $nilai=75?>

<p>nilai <?= $nilai ?> <span style="color: <?= $nilai >= 75 ? "green" : "red"?>;"><?= $nilai >= 75 ? "Kompeten" : "Belum Kompeten" ?> </span> </p>
</body>
</html>