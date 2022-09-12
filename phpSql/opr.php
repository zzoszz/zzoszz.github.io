<?php
echo "\n1. Operator Aritmatika + - * / % **\n";
$a = 5;
$b = 2;
$tambah = $a + $b;
$pangkat = $a ** $b;
$mina = -$a + $b;
echo "5 + 2 = $mtk";
echo "5^2 = $pangkat";
echo "-5 + 2 = $mina";

echo "\n\n2. Operator penugasan = += -= /= %= .=\n";
$aab = $a += $b; var_dump($aab);
// $a5 += 5; var_dump($a5);
// $aNama .= var_dump($aNama);

echo "\n3. Operator perbandingan == ===(identik) != atau <> !== < > >= <= hasilnya boolean\n";
var_dump(10 == '10');
var_dump(10 === '10');

echo "\n4. Operator logika && and || or !$ (not) $ xor $ (true jika salah satu true)\n";
var_dump(true && false);
var_dump(true and true);
var_dump(true || false);
var_dump(true or true);
var_dump(true xor true);
var_dump(false xor false);
var_dump(true xor false);
var_dump(!true);

echo "\n5. Operator increment dan decrement ++pre dan post++\n";
$id = 10;   var_dump($id);
++$id;      var_dump($id);
$id++;      var_dump($id);
echo "\n";
$ida = ++$id; var_dump($ida); var_dump($id);
$idb = $id++; var_dump($idb); var_dump($id);
echo "\nExpression adalah segala sesuatu yang memiliki value\n";
echo "Statement kalimat lengkap dalam bahasa\n";
echo "Block adalah kumpulan statement yang terdiri dari nol atau lebih statement ditandai dengan {}";
?>