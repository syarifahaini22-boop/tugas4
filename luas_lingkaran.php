<?php
// Rumus Luas Lingkaran: π × r²
function luasLingkaran($r) {
    return pi() * pow($r, 2);
}

// Contoh penggunaan
$r = 7;
echo "<h2>Rumus Luas Lingkaran</h2>";
echo "Jari-jari = $r <br>";
echo "Luas = " . luasLingkaran($r);
?>
