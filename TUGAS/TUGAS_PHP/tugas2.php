<?php
$star = 9; // Menginisialisasi variabel $star dengan nilai 9, yang akan digunakan untuk menentukan jumlah baris dalam pola.
for ($a = 1; $a <= $star; $a++) { // Loop pertama (baris luar): Ini mengontrol jumlah baris yang akan dicetak. Dimulai dari 1 dan terus bertambah hingga mencapai $star (yaitu 9).
    for ($c = $star; $c >= $a; $c -= 1) { // Loop kedua (baris dalam): Ini mengontrol jumlah bintang yang dicetak dalam setiap baris. Dimulai dari $star (9) dan terus berkurang hingga mencapai $a (nilai saat ini dari loop luar).
        echo "*"; // Mencetak karakter bintang.
    }
    echo "<br>"; // Mencetak tag HTML "<br>" untuk membuat baris baru setelah setiap baris bintang selesai dicetak.
}
