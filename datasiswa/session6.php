<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Gaya CSS tambahan */
        .hapus {
            color: #f00; /* Warna merah untuk tautan hapus */
            cursor: pointer; /* Ganti kursor saat mengarahkan ke tautan */
        }
    </style>
</head>
<body>
    <h1>DATA SISWA</h1>
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
        echo "<td><a href='#' class='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'><i class='bx bx-trash'></i>Hapus</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    // session_destroy();
    ?>
    <button class="kembali" name="kembali" value="kembali"><a href="session5.php">Kembali</a></button>
</body>
</html>
