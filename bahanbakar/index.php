<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<?php

class BahanBakar {
    //properti
    public $tipe;
    public $jumlah;
    public $harga;
//method
    public function __construct($tipe, $jumlah, $harga) {
        $this->tipe = $tipe;
        $this->jumlah = $jumlah;
        $this->harga = $harga;
    }

    public function getTotalHarga() {
        $ppn = 0.1;
        $total = $this->jumlah * $this->harga;
        $total += $total * $ppn;
        return $total;
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

    $bahanBakar = new BahanBakar($jenis, $liter, $harga);
    $bahanBakar->getOutput();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="input-group">
        <label for="liter">jumlah liter:</label>
        <input type="number" id="liter" name="liter" required>
    </div>
    <label for="jenis">pilih:</label>
    <select name="jenis" id="jenis" required>
        <option value="Shell super">Shell super</option>
        <option value="Shell V-power">Shell V-power</option>
        <option value="Shell V-power Diesel">Shell V-power Diesel</option>
        <option value="Shell V-power nitro">Shell V-power nitro</option>
    </select>
    <br>
    <button type="submit" class="btn btn-secondary text-body">beli</button>
    <!-- <a href="" class="btn btn-primary w-100">Beli</a> -->
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>