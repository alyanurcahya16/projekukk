<?php
//menangkap data nama denngan method post 
$nama = $_POST['nama'];
//menangkap data usia dengan method post
$usia = $_POST['usia'];

//menampilakan data nama 
echo "Nama anda adalah" . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia anda adalah " . $usia;

?>