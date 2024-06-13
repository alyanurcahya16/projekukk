<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiket konser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

class tiket {
    //properti
    public $tipe;
    public $jumlah;
    public $harga;
    public $ppn;
//method
    public function __construct($tipe, $jumlah, $harga, $ppn) { //yang di dalam adalah parameter (wadah untuk isi nilai)
       //blok kode
        $this->tipe = $tipe;
        $this->jumlah = $jumlah;
        $this->harga = $harga;
        $this->ppn = $ppn;
    }

    public function getTotalHarga() {
        $ppn = 0.1;
        $total = $this->jumlah * $this->harga;
        $total += $total * $ppn;
        return $total; //retrun untuk mengemblikan nilai
    }

    public function getOutput() {
       
        echo "<center>Anda membeli bahan bakar minyak tipe {$this->tipe} <br> Dengan jumlah : {$this->jumlah} Liter <br> Total yang harus anda bayar Rp. " . number_format($this->getTotalHarga(), 0, ',', '.') . "</center>";
    }
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liter = $_POST["liter"];
    $jenis = $_POST["jenis"];

    switch ($jenis) {
        case "Shell super":
            $harga = 15420;
            break;
        case "Shell V-power":
            $harga = 16130;
            break;
        case "Shell V-power Diesel":
            $harga = 18310;
            break;
        case "Shell V-power nitro":
            $harga = 16510;
            break;
        default:
            $harga = 0;
            break;
    }

    $bahanBakar = new BahanBakar($jenis, $liter, $harga); // new = objek
    $bahanBakar->getOutput();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="input-group">
        <label for="liter">jumlah liter:</label>
        <input type="number" id="liter" name="liter">
    </div>
    <label for="jenis">pilih:</label>
    <select name="jenis" id="jenis">
        <option value="Shell super">Shell super</option>
        <option value="Shell V-power">Shell V-power</option>
        <option value="Shell V-power Diesel">Shell V-power Diesel</option>
        <option value="Shell V-power nitro">Shell V-power nitro</option>
    </select>
    <br>
    <button type="submit">beli</button>
</form>
</body>
</html>