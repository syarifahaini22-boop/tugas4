<?php
// Rumus Luas Segitiga: 1/2 × alas × tinggi
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Soal
$alas = 8;
$tinggi = 6;

echo "<h2>Soal Luas Segitiga</h2>";
echo "Diketahui sebuah segitiga memiliki alas = $alas cm dan tinggi = $tinggi cm.<br>";
echo "Hitung luas segitiga tersebut!<br><br>";

echo "Jawaban:<br>";
echo "Luas = 1/2 × alas × tinggi<br>";
echo "Luas = 1/2 × $alas × $tinggi<br>";
echo "Luas = " . luasSegitiga($alas, $tinggi) . " cm²";
?>
