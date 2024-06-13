<?php
//deklarasi function
function nama_fungsi($parameter1, $parameter2) {
    //blok kode
    return $parameter1 + $parameter2;
}

//memanggil fungsi 
echo nama_fungsi(12, 30 ); // isi dengan argument dengan variabel atau nilai
echo "<br><br>";
?>

<!-- latihan 1 angka -->
<?php
function nama_fungsi1( $angka1, $angka2){
    return $angka1 + $angka2;
}

echo nama_fungsi1(2,3);
echo "<br>";
echo nama_fungsi1(3,4);
echo "<br>";
echo nama_fungsi1(4,5);
echo "<br>";
?>

<!-- latihan 2 pangkat -->
<?php
function kurangAngka( $kurang1, $kurang2){
    return $kurang1**$kurang2;
}

echo kurangAngka(2,5);
echo "<br>";
echo kurangAngka(10,2);
echo "<br>";
echo kurangAngka(15,3);
echo "<br>";
?>

<!-- latihan 3 modulus -->
<?php
function modulus( $modul1, $modul2){
    return $modul1%$modul2;
}

echo modulus(2,5);
echo "<br>";
echo modulus(10,2);
echo "<br>";
echo modulus(15,3);
echo "<br>";
?>


