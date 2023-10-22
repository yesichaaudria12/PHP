<?php
$baris = 9; // diinisialisasi dengan nilai 9, yang akan menentukan jumlah baris dalam pola segitiga.
for ($i = 0; $i < $baris; $i++) { // Loop pertama (baris luar): Ini mengontrol jumlah baris yang akan dicetak. Dimulai dari 0 dan terus bertambah hingga kurang dari $baris (9).
    for ($j = 0; $j <= $i; $j++) { // Loop kedua (baris dalam): Ini mengontrol jumlah angka yang dicetak dalam setiap baris. Dimulai dari 0 dan terus bertambah hingga mencapai $j (nilai saat ini dari loop luar)
        echo $j; // Mencetak nilai variabel $j, yang merupakan angka yang meningkat dengan setiap iterasi.
    }
    echo "<br>"; // Mencetak tag HTML "<br>" untuk membuat baris baru setelah setiap baris angka selesai dicetak.
}
