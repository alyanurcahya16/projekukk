<?php
function namaRayon ($nama, $rayon, $nis){
    return 'Nama:'. $nama ."<br>". 'Rayon:'. $rayon. "<br>". 'Nis:'. $nis. "<br>";
}
echo namaRayon('Jhibril' , 'Tajur 5' , 123456);
echo "<hr>";
echo namaRayon('Aziz' , 'Ciawi 1' , 123456);
echo "<hr>";
echo namaRayon('Yuni' , 'cibedug 3' , 123456);
echo "<hr>";
?>

<!-- contoh bu rani -->
<?php
function data($nama, $rayon, $nis){
    echo "Nama : $nama <br/>";
    echo "Rayon : $rayon <br/>";
    echo "Nis : $nis <br/>";
    echo "<hr/>";
};

data("Jibril" , "Tajur 5", 123456);
data("Aziz" , "Ciawi 1", 123456);
data("Jibril" , "Cibedug 3", 123456);
?>