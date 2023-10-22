<?php
// Input variabel nilai
$nilai = 95; // Ganti dengan nilai yang diinginkan

// Inisialisasi kategori
$kategori = '';

// Menggunakan switch untuk menentukan kategori
switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = "A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        $kategori = "B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        $kategori = "C";
        break;
    case ($nilai >= 0 && $nilai <= 70):
        $kategori = 'D';
        break;
    default:
        $kategori = "D";
}

// Tampilkan pesan
echo "Nilai Anda: $nilai, <br>kategori: $kategori";
