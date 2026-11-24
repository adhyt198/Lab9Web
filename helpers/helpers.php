
<?php

// ========================================
// 1. Fungsi Konversi Celsius ke Fahrenheit
// ========================================
function konversiCelciusKeFahrenheit($c)
{
    return ($c * 9 / 5) + 32;
}


// ========================================
// 2. Fungsi Menentukan Status Nilai
// ========================================
function tentukanStatusNilai($nilai)
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}


// ========================================
// 3. Fungsi Menghitung Total Belanja
// ========================================
function hitungTotal($harga, $jumlah)
{
    return $harga * $jumlah;
}

?>
