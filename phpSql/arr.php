<?php
echo "\n1. Array\n";
// cara1 buat array
$arr1 = array (
    "Ahmad",
    30,
    "L"
);
// cara2 buat array
$arr2 = ['Abdul', 28, 'L'];
var_dump($arr1);
var_dump($arr2);
// 1. akses data array
echo "Nama: $arr1[0]\n";
echo "Umur: $arr1[1]\n";
// 2. mengubah data array
$arr1[1] = 35;
echo "Umur Ubah: $arr1[1]\n";
// 3. tambah data dari belakang
$arr1[] = "Indo";
var_dump($arr1);
// 4. hapus data array di index tertentu (indexnya juga akan hilang)
unset($arr1[2]);
var_dump($arr1);
// 5. menghitung data array
var_dump (count($arr1));


echo "\n2. Map: Menulis array dengan map itu mengganti auto-increment (index) array menjadi yang kita inginkan\n";
$map1 = array (
    "nama" => "Ahmad Abdul",
    "umur" => 36,
    "jenis" => "L"
);
// $abjad1 = [
//     "nama" => "Ahmad Abdul",
//     "umur" => 36,
//     "jenis" => "L"
// ];
echo "nama: $map1[nama]\n";
var_dump($map1["nama"]);
// array bersarang (array di dalam array)
$map2 = [
    "nama" => 'Abdul Ajis',
    "umur" => 28,
    "alamat" => [
        "kec" => "cililin",
        "negara" => "indo"
    ]
];
var_dump($map2);
echo "Kecamatan: " . $map2["alamat"]["kec"] . "\n";
var_dump($map2["alamat"]["kec"]);

