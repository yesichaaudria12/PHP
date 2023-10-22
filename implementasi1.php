<?php
$nama = "Pelita Nur Najmina";
$jenis_kelamin = "Perempuan";
$tahun_lahir = 1997;
$umur = date('Y') - $tahun_lahir;

if ($jenis_kelamin == "Perempuan") {
    echo "Selamat pagi, nyonya $nama <br>";
    echo "Umur anda sekarang $umur tahun";
} else {
    echo "Selamat pagi, tuan $nama";
    echo "Umur anda sekarang $umur tahun";
}
