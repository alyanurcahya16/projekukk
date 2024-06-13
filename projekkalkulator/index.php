<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat kalkulator perbandingan</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class= "box"> 
        <div class= "tanda">
            <h1>></h1>
        </div>
        

<?php
 if (isset($_POST['submit'])) {                                                                  
    $angka1= $_POST['angka_pertama'];
    $angka2= $_POST['angka_kedua'];
    
    if ($angka1 > $angka2) {
        $operator = ">";
        echo "<h5 class = 'operator'>$operator</h5>";
        echo "<h1>$angka1 lebih besar dari $angka2</h1>";
    }else if ($angka1 < $angka2){
        $operator = "<";
        echo "<h5 class = 'operator'>$operator</h5>";
        echo "<h1>$angka1 lebih kecil dari $angka2</h2>";
    } else {
        $operator = "=";
        echo "<h5 class = 'operator'>$operator</h5>";
        echo "<h1>$angka1 sama dengan $angka2</h2>";
    } 
}
?>
 <h3>cek perbandingan angka</h3>
        <form method="POST" >
            <input type="number" id="angka_pertama" placeholder= "Angka pertama" class = "kotak1" name="angka_pertama" required>
            <input type="number" id="angka_kedua" placeholder= "Angka kedua" class = "kotak2" name="angka_kedua" required>
            <button type="submit"
                style="background-color:#ffffff;font-weight: 700 cursor: pointer;">kirim</button>
        </form>
    </div>      
</body>
</html>