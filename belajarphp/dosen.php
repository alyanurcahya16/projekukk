<?php
/*studi kasus 
seorang dosen akan memberikan penilaian dengan kriteria 
Nilai >=80 Nilai Mutu A
Nilai >=68 Nilai Mutu B
Nilai >=56 Nilai Mutu C
Nilai >=45 Nilai Mutu D
Selainnya Nilai Mutu E
*/

// kalau nilai mutunya A,B,C maka Lulus, Selainnya maka Tidak lulus 
 $nilai = 80;

    //versi 1
    //kalau nilainya >=80 maka A dan Lulus
 if($nilai>=80){
    echo "Nilai Anda" .$nilai. "Maka Mutu Anda A dan dinyatakan Lulus";
    //kalau nilainya >=68 maka B dan Lulus
}elseif($nilai>=68){
    echo "Nilai Anda" .$nilai. "Maka Mutu Anda B dan dinyatakan Lulus";
    //kalau nilainya >=56 maka C dan Lulus
}elseif($nilai>=56){
    echo "Nilai Anda" .$nilai. "Maka Mutu Anda C dan dinyatakan Lulus";
    //kalau nilainya >=45 maka D dan Tidak Lulus
}elseif($nilai>=45){
    echo "Nilai Anda" .$nilai. "Maka Mutu Anda D dan dinyatakan Lulus";
    //selainnya maka E dan Tidak lulus
}else{
    echo "Nilai Anda" .$nilai. "Maka Anda E dinyatakan Tidak Lulus";
}

echo "<br><br>";
//versi 2
$nilai2=75;
if($nilai2>=80){
    $nilaiMutu="A";
    $ket="Lulus";
}elseif($nilai2>=68){
    $nilaiMutu="B";
    $ket="Lulus";
}elseif($nilai2>=56){
    $nilaiMutu="C";
    $ket="Lulus";
}elseif($nilai2>=45){
    $nilaiMutu="D";
    $ket="Tidak Lulus";
}else{
    $nilaiMutu="E";
    $ket="Tidak Lulus";
}
echo "Versi 2 Nilai Anda" .$nilai2." Maka Anda ".$nilaiMutu." dinyatakan ".$ket;


//versi3

?>