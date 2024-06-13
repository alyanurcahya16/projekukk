<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="box">
        <h1>kasir Sederhana</h1>

        <!----untuk mengsejajarkan titik dua---->
    <style>
        label {
            display: inline-block;
            width: 100px; 
            text-align: center;
            margin-right: 10px;
        }
    </style>

        <div class="alya">
            <form action="" method="post">
                <label for="">item : </label>
                <input type="text" name="item" id="item" required autocomplete="off"><br><br>
                
                <label for="">harga : </label>
                <input type="number" name="harga" id="harga" required><br><br>
                
                <label for="">jumlah : </label>
                <input type="number" name="jumlah" id="jumlah" required><br><br>
                
                <button class="kirim" value="kirim"><i class='bx bx-plus'></i>Tambah</button>
                <button class="cetak" name="cetak" value="cetak"><a href="session6.php"><i class='bx bx-printer'></i>Cetak</a></button>
                <button class="hapus" name="hapus" value="hapus"><a href="session3.php"><i class='bx bx-trash'></i>Hapus Data</a></button>
            </form>
        </div>
        
<div class="cp">
    <?php
    session_start();
    
    if (!isset($_SESSION["kasir"])) {
        $_SESSION["kasir"] = array();
    }
    
    if (isset($_POST["item"]) && isset($_POST["harga"]) && isset($_POST["jumlah"])) {
        $data = array(
            "item" => $_POST["item"],
            "harga" => $_POST["harga"],
            "jumlah" => $_POST["jumlah"],
        );
        array_push($_SESSION["kasir"], $data);
        // header('Location: http://localhost/folderphp/kasir/kasir.php');
    }
    
    
    //proses penghapusan data siswa
    if(isset($_GET['page'])) {
        $index = $_GET['page'];
        unset($_SESSION['kasirsederhana'][$index]);
        //redirect kembali ke halaman ini setelah penghapusan
        header('Location: http://localhost/folderphp/kasir/kasir.php');
        exit;
    }
    
    // var_dump($_SESSION["dataSiswa"]);
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>item</th>";
    echo "<th>harga</th>";
    echo "<th>jumlah</th>";
    echo "<th>HAPUS</th>";
    
    echo"</tr>";
    
    foreach ($_SESSION["kasir"] as $index => $value) {
        echo "<tr>";
        echo "<td>" . $value["item"] . "</td>";
        echo "<td>" . $value["harga"] . "</td>";
        echo "<td>" . $value["jumlah"] . "</td>";
        echo "<td><a href='?page=".$index."' class='hapus'><i class='bx bx-trash'></i>Hapus</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    
    session_destroy();
    ?>
</div>
</div>
</body>
</html>