<?php
// Rumus Keliling Persegi Panjang: 2 × (p + l)
function kelilingPersegiPanjang($p, $l) {
    return 2 * ($p + $l);
}

// Contoh penggunaan
$p = 10;
$l = 5;
echo "<h2>Rumus Keliling Persegi Panjang</h2>";
echo "Panjang = $p, Lebar = $l <br>";
echo "Keliling = " . kelilingPersegiPanjang($p, $l);
?>
