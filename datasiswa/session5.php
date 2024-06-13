<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="box">
        <h1>Masukan Data Siswa</h1>

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
                <label for="">Nama : </label>
                <input type="text" name="nama" id="nama" required autocomplete="off"><br><br>
                
                <label for="">NIS : </label>
                <input type="number" name="nis" id="nis" required><br><br>
                
                <label for="">Rombel : </label>
                <input type="text" name="rombel" id="rombel" required><br><br>
                
                <label for="">Rayon : </label>
                <input type="text" name="rayon" id="rayon" required><br><br>
                
                <button class="kirim" name="kirim" value="kirim"><i class='bx bx-plus'></i>Tambah</button>
                <button class="cetak" name="cetak" value="cetak"><a href="session6.php"><i class='bx bx-printer'></i>Cetak</a></button>
                <button class="hapus" name="hapus" value="hapus"><a href="session3.php"><i class='bx bx-trash'></i>Hapus Data</a></button>
            </form>
        </div>
        
<div class="cp">
    <?php
    session_start();
    
    if (!isset($_SESSION["dataSiswa"])) {
        $_SESSION["dataSiswa"] = array();
    }
    
    if (isset($_POST["nama"]) && isset($_POST["nis"]) && isset($_POST["rombel"]) && isset($_POST["rayon"])) {
        $data = array(
            "nama" => $_POST["nama"],
            "nis" => $_POST["nis"],
            "rombel" => $_POST["rombel"],
            "rayon" => $_POST["rayon"]
        );
        array_push($_SESSION["dataSiswa"], $data);
        header('Location: http://localhost/session/session5.php');
    }
    
    
    //proses penghapusan data siswa
    if(isset($_GET['page'])) {
        $index = $_GET['page'];
        unset($_SESSION['dataSiswa'][$index]);
        //redirect kembali ke halaman ini setelah penghapusan
        header('Location: http://localhost/session/session5.php');
        exit;
    }
    
    // var_dump($_SESSION["dataSiswa"]);
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>NAMA</th>";
    echo "<th>NIS</th>";
    echo "<th>ROMBEL</th>";
    echo "<th>RAYON</th>";
    echo "<th>HAPUS</th>";
    
    echo"</tr>";
    
    foreach ($_SESSION["dataSiswa"] as $index => $value) {
        echo "<tr>";
        echo "<td>" . $value["nama"] . "</td>";
        echo "<td>" . $value["nis"] . "</td>";
        echo "<td>" . $value["rombel"] . "</td>";
        echo "<td>" . $value["rayon"] . "</td>";
        echo "<td><a href='?page=".$index."' class='hapus'><i class='bx bx-trash'></i>Hapus</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    
    // session_destroy();
    ?>
</div>
</div>
</body>
</html>