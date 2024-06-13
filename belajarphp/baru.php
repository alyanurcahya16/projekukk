<?php
$nilai = 85;
if($nilai>90){
    $grade="A" ;
    $ket="LULUS";
}elseif($nilai>80){
    $grade="B";
    $ket="LULUS";
}elseif($nilai>70){
    $grade="C";
    $ket="LULUS";
}elseif($nilai<=70){
    $grade="D";
    $ket="TIDAK LULUS";
}
echo "Nilai" .$nilai." Maka Anda ".$grade." dinyatakan ".$ket;

?>