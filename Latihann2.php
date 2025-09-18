<?php
function cekGenapGanjil($bilangan) {
    if ($bilangan % 2 ==0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}
echo "Angka 10 adalah:". cekGenapGanjil(10);
echo ",Angka 1 adalah:". cekGenapGanjil(1);