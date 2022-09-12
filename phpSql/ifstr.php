<?php
echo "\n1. String\n";
// php ifstr.php
// menggabungkan dengan + atau . disarankan .
$name = 'Ahmad';
echo "Nama : " . $name . PHP_EOL;
echo "usia : " . 26 . "\n";
echo "1.1 Konversi tipe data\n";
$nilai = 100;
$nilaistring = (string)100;
$nilaiint = (int)"100";
$intsalah = (int)"seratus"; 
var_dump($nilai);
var_dump($nilaistring);
var_dump($nilaiint);
// var_dump($salahint); (hasilnya akan error)
$abc ='abcde';
echo $abc[0] . PHP_EOL;
echo $abc[3] . PHP_EOL;
echo "3. Variabel Parsing\n";
$nama ='Ahmad';
echo "Hello $nama, Selamat Belajar" .PHP_EOL;
echo "panggilan Abdul lengkapnya {$name} Abdul" .PHP_EOL;

echo "\n2.if\n";
// bisa if saja, atau dengan else, atau dengan else if else, berikut contoh if, else if, else
$nilai = 80;
if ($nilai >= 70) {
    echo "Lusus" . PHP_EOL;
} else if ($nilai < 70 && $nilai >= 50) {
    echo "Remidial" . PHP_EOL;
} else {
    echo "Tidak Lulus" . PHP_EOL;
};
// bisa ditulis juga dengan titik dua (:)
$nilai2 = 40;
if ($nilai2 >= 70):
    echo "Anda Lusus" . PHP_EOL;
elseif ($nilai2 < 70 && $nilai2 >= 50):
    echo "Remidial" . PHP_EOL;
else:
    echo "Tidak Lulus" . PHP_EOL;
endif;

echo "\n3. Switch Case\n";
$nilai3 = 60;
switch ($nilai) {
    case 90:
    case 80:
    case 70:
        echo "lulus" .PHP_EOL; break;
    case 60:
        echo "remidial" .PHP_EOL; break;
    default:
        echo "tidak lulus" .PHP_EOL;
};

switch ($nilai):
    case 90:
    case 80:
    case 70:
        echo "lulus" .PHP_EOL; break;
    case 60:
        echo "remidial" .PHP_EOL; break;
    default:
        echo "tidak lulus" .PHP_EOL;
endswitch;

echo "\n4. Ternary operator\n";
// tanpa ternary
$gender = 'pria';
$hi = null;
if ($gender == 'pria') {
    $hi = 'hi cowok';
} else {
    $hi = 'ho cewek';
};
// dengan ternary
$hi = $gender == 'pria' ? 'hi cowok' : 'hi cewek';
echo $hi .PHP_EOL;

echo "\n5. null coaleascing operator\n";
// tanpa null coleascing operator
$data = [];
if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}
echo $action .PHP_EOL;
// dengan null coleascing operator
$action = $data['action'] ?? 'nothing';
echo $action .PHP_EOL;