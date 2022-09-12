<?php

function fungsi() {
    echo "Hallo" . PHP_EOL;
}
fungsi();
fungsi();
// argumen
function fungsi2($arg) {
    echo "Halo $arg" . PHP_EOL;
}
fungsi2("Ahmad");
// argumen default
function fungsi3($arg2 = "Ahmad Default") {
    echo "Halo $arg2" . PHP_EOL;
}
fungsi3();
fungsi3("Ajis");

// variable length argument list
$arr = [1,2,3,4];
function fungsi4 (...$arg4) {
    foreach ($arg4 as $a4) {
        echo "$a4" . PHP_EOL;
    };
};
fungsi4(...[1,2,3]);
fungsi4(...$arr);

// return value
function fungsi5($arg5, $arg51){
    return $arg5 + $arg51;
    echo "setelah return, tidak dieksekusi";
};
$tambah = fungsi5(5,2);
echo $tambah;

// return type declaration (contoh di bawah, kemabliannya akan string, walaupun memasukan int);
function fungsi6(): string {
    return 5;
};
echo "\n";
var_dump (fungsi6());

// variable function
function fungsi7(){
    echo "Hi" . PHP_EOL;
}
$fungsi71 = "fungsi7";
$fungsi71();

// variable function penerapan
function fungsi8($nama, $umur){
    echo $nama . PHP_EOL . $umur;
};
fungsi8('nama', 20);

function fungsi9($nama2, $umur2){
    $namaID = $umur2($nama2);
    echo "\nHalo $namaID";
}
function umurID($nama2){
    return "ID: $nama2";
};
fungsi9("Ahmad", "umurID");
fungsi9("Ahmad", "strtoupper");
fungsi9("Ahmad", "strtolower");

// anonimous function
$anonimF = function (string $kec){
    echo "\nkec: $kec" . PHP_EOL;
};
$anonimF("CIlilin");

// anonimous function sebagai argumen


?>