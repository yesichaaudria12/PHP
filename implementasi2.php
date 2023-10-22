<?php

// Menu
// 1. Penjumlahan 
// 2. Pengurangan 
// 3. Perkalian 
// 4. Pembagian

$menu = 4;
$bilangan1 = 10;
$bilangan2 = 5;

if ($menu == 1) {
    echo $bilangan1 + $bilangan2;
} else if ($menu == 2) {
    echo $bilangan1 - $bilangan2;
} else if ($menu == 3) {
    echo $bilangan1 * $bilangan2;
} else if ($menu == 4) {
    echo $bilangan1 / $bilangan2;
}
