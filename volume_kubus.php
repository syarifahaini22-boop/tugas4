<?php
// Rumus Volume Kubus: s³
function volumeKubus($s) {
    return pow($s, 3);
}

// Contoh penggunaan
$s = 4;
echo "<h2>Rumus Volume Kubus</h2>";
echo "Sisi = $s <br>";
echo "Volume = " . volumeKubus($s);
?>
