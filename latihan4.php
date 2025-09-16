<?php
$belanja = 250000;

if ($belanja >=200000) {
    $diskon_persen = 20;
} elseif ($belanja >=100000) {
    $diskon_persen = 10;
} else {
    $diskon_persen = 0;
}

$diskon_rp = $belanja * ($diskon_persen / 100);
$total_bayar = $belanja - $diskon_rp;

echo "Belanja: Rp" . 
number_format($belanja,0,',',','). "\n";
echo "Diskon: $diskon_persen% => Rp " .
number_format($diskon_rp,0,',',','). "\n";
echo "Total bayar: Rp " .
number_format($total_bayar,0,',',','). "\n";