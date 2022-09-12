<?php
echo "\n1. Perulangan: for\n";
// PHP_EOL (end of line);
$f1 = 1;
for ( ; $f1 <= 3; ) {
    echo "ulang for" .PHP_EOL; $f1++;
}
// cara lain penulisan for:
for ( $f2 = 1; $f2 <= 3; $f2++ ) {
    echo $f2 .PHP_EOL;
}
// dengan titik dua (:):
for ( $f3 = 1; $f3 <= 3; $f3++ ):
    echo "ulang $f3" .PHP_EOL;
endfor;

echo "\n2. perulangan: foreach (datanya array)\n";
// tanpa foreach
$arr = [1,2,3];
for ($fe = 0; $fe < count($arr); $fe++){
    echo "$arr[$fe]" . PHP_EOL;
};
// dengan foreach
foreach ($arr as $array) {
    echo "$array" . PHP_EOL;
};


echo "\n3. Perulangan: while\n";
$w1 = 1;
while ($w1 <= 3) {
    echo "ulang while" .PHP_EOL; $w1++;
};
// dengan titi dua (:);
$w2 = 1;
while ($w2 <= 3):
    echo "ulang while : " .$w2 .PHP_EOL; $w2++;
endwhile;

echo "\n4. Perulangan: do while\n";
$dw1 = 1;
do {
    echo $dw1 . PHP_EOL; $dw1++;
} while ($dw1 <= 3);
$dw2 = 5;
do {
    echo $dw2 . PHP_EOL; $dw2++;
} while ($dw2 <= 3);

echo "\n5. goto operator (untuk mengakses label tertentu)\n";
goto a;
// Lewat A tidak akan ditampilkan, karena dilewat oleh goto: a
echo "Lewat A" . PHP_EOL;
a:
echo "Menuju A" . PHP_EOL;
