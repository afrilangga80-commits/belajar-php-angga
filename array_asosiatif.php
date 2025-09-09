<?php
$siswa = [
    'nama' => 'Angga',
    'umur' => '17',
    'nis'  => 12345,
    'kelas' => 'XI RPL 1',
    'aktif' => true
];

// Hapus umur
unset($siswa["umur"]);

//Tambah alamat
$siswa["alamat"] = "Jalan Raya No. 123";

var_dump($siswa);