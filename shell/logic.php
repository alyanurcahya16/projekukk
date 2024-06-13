<?php
//sediakan kotak pembungkus ang digunakan(sesuai dengan fitur)
class DataBahanBakar {
    private $hargassuper;
    private $hargasvpower;
    private $hargasvpowerdiesel;
    private $hargasvpowernitro;
    //attr harga2 dibuat private karena sudah ada getter yang akan menampilkan datanya, dan ada atter yang akan 
    public $jenisyangdipilih;
    public $totalliter;
    //attr diatas di set public karna nilai diisi dari lluar
    protected $totalpembayaran;
    //set protected karna hanya digunakan oleh class dia dan turunnannya untk proses data, tidak akan ditampilkan diluar

    public function setHarga($valssuper, $valspower, $valspowerdiesel, $valspowernitro){
        //mengisi nilai atribut, nilai nantinya diisi dari luar class melalui fungsi setter ini
        //nilai dari luar diambil kedalam class melalui parameter (variabel yg didalam kurung), nilai dari luar
        //penamaan parameter bebas asal urutan pengisian dari luarnya sesuai 

        $this->hargassuper = $valssuper;
        $this->hargasspower = $valspower;
        $this->hargaspowerdiesel = $valspowerdiesel;
        $this->hargasvpowernitro = $valspowernitro;
    }

    public function getharga() {
        //setelah nilai dari atribut disimpan fungsi getter akan mengambilkan/menampilkannya untuk digunakan 
        //karna data yang akan dikirim/dikeluarkan lebih dari satu, maka data2 tersebut disatukan terlebih dahulu
        $semuadatasolar["ssuper"] = $this->hargassuper;
        $semuadatasolar["svpower"] = $this->hargasvpower;
        $semuadatasolar["svpowerdiesel"] = $this->hargasvpowerdiesel;
        $semuadatasolar["svpowernitro"] = $this->hargasvpowernitro;
        //tujuan utama gettar : return
        return $semuadatasolar;
    }
}

class pembelian extends databahanbakar {
    //data sudah disediakan tinggal proses perhitungan jumlah pembeli
    public function totalharga(){
        $this->totalpembayaran = $this->getharga()[$this->jenisyangdipilih] * $this->totalliter;
    }
    
    public function cetakbukti() {
        echo "---------------------------";
        echo "<br>";
        echo "jenis bahan bakar : " . $this->jenisyangdipilih;
        echo "<br>";
        echo "total liter : " . $this->jenisyangdipilih;
        echo "<br>";
        echo "harga bayar : Rp." . number_format($this->totalpembayaran, 0,',','.');
        echo "<br>";
        echo "---------------------------";
    }
}
?>