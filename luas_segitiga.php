<?php
// Rumus Luas Segitiga: 1/2 × alas × tinggi
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

$alas = 8;
$tinggi = 6;

echo "<h2>Rumus Luas Segitiga</h2>";
echo "Alas = $alas, Tinggi = $tinggi <br>";
echo "Luas = " . luasSegitiga($alas, $tinggi);
?>
