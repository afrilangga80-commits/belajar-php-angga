<?php
$nilai = 76;

if ($nilai >=90) {
    $grade = "A";
} elseif ($nilai >= 75) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}

echo "Nilai: $nilai\n";
echo "Grade: $grade\n";