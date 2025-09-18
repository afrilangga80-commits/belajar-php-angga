<?php
function nilaiTerbesar($a, $b, $c) {
    return max($a, $b, $c);
}
echo "Nilai terbesar dari 12, 25, 8 = " . 
nilaiTerbesar(12, 25, 8);