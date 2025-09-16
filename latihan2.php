<?php
$umur = 16;

if ($umur < 13) {
    echo "Umur $umur -> Anak";
} elseif ($umur <= 17) {
    echo "Umur $umur -> Remaja";
} else {
    echo "Umur $umur -> Lansia";
}