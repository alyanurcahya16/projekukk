<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    //mulai sesi
    session_start();

    //menghapus sesi dari sesi yang sudah ada
    session_destroy();

    header('location: style.css session3.php session4.php session5.php session6.php');
    exit;
  ?>  
</body>
</html>