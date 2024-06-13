<!-- luas bangun datar persegi -->
<?php
function persegi($sisi){
    return $sisi * $sisi;
}
echo persegi(2);
echo "<br>";
echo persegi(14);
echo "<br>";
echo persegi(10);
echo "<br><br>";
?>

<!-- ddatar segitiga -->
<?php
function segitiga($alas, $tinggi){
    return $alas * $tinggi;
}
echo segitiga(10, 12);
echo "<br>";
echo segitiga(24, 20);
echo "<br>";
echo segitiga(44, 36);
echo "<br><br>";
?>

<!-- datar lingkaran -->
<?php
function lingkaran($diameter){
    $jari = $diameter / 2;
    return 3.14 * ($jari * $jari);
}
echo lingkaran(34);
echo "<br>";
echo lingkaran(100);
echo "<br>";
echo lingkaran(40);
echo "<br>";
?>