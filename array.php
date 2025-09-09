<?php

$siswa = ["Denis", "Gevta", "Dyan", "Deta", "Angga"];
$siswa[] = "Joko";  //menambahkan Joko
unset($siswa[0]);  //menghapus Denis
var_dump ($siswa);  