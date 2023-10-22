<?php
// Contoh data
$nama = "Yesicha Audria";
$tinggi_badan = 155; // Tinggi badan dalam centimeter
$berat_badan = 45; // Berat badan dalam kilogram

// Konversi tinggi badan ke meter (dibagi 100)
$tinggi_badan_meter = $tinggi_badan / 100;

// Hitung nilai BMI
$bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);

// Tentukan kategori BMI
if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kategori = "sedang";
} else {
    $kategori = "gemuk";
}

// Tampilkan pesan
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori.";

/*
* Berikut adalah klasifikasi BMI umum yang digunakan oleh World Health Organization (WHO):

Kurus (Underweight): BMI kurang dari 18.5
Normal (Normal Weight): BMI antara 18.5 dan 24.9
Gemuk (Overweight): BMI antara 25 dan 29.9
Obesitas (Obese): BMI 30 atau lebih
*/
