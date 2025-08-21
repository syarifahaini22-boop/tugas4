<?php
// Rumus Luas Persegi: s²
function luasPersegi($s) {
    return pow($s, 2);
}

$s = 5;

echo "<h2>Rumus Luas Persegi</h2>";
echo "Sisi = $s <br>";
echo "Luas = " . luasPersegi($s);
?>
