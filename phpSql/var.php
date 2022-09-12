<?php
// A. Memulai Dari Awal
/* download dan instal xampp (ikuti instruksi)
buka pathnya: c > xampp > php > php.exe (C:\xampp\php), copy pathnya.
- buka environment > environment variables > system variables (path) edit > new, paste pathnya.
- buka cmd > ketik 'php --version' untuk memastikan instalasinya.
***
- untuk belajar, kita akan menjalankan php berbasis terminal, maka folder php yang akan kita buat bisa ditaruh di mana saja
- buka folder tersebut lalu buat file namabebas.php
*** */
// berikut penulisannya
/* <?php
    isi konten, bisa ditutup, bisa juga tidak
    isi spasi saja ' ' akan menjadi %
?> */
echo "Hello World!\n";

// B. Melihat file
/*
1. Di cmd
c:user> cd onedrive (buka folder onedrive)
c:user> cd onedrive/php (buka folder onedrive lalu folder php)
c:user\onedrive\php> php index.php (buka file index.php di terminal)
c:user\onedrive\php> index.php (buka file index.php di code editor defalut)
2. Di vs code
- terminal > new terminal (akan keluar terminal) > ketik: php index.php (syaratnya harus membuka file parentnya)
*/

// 1. Tipe data {int (bilangan bulat desimal, basis 10, hexadisimal, basis 16, octa basis 8, binary basis 2) float (bilangan pecahan)}
// var_dump(), untuk melihat data dan tipe datanya apa.
echo "\n1. int dan floating point: decimal, octal, hexadecimal, binary, underscore di number membantu merapikan tulisan \n";
var_dump(1234, 0123, 0x1A, 0b11111111, 1_234);
echo "floating point, dengan E notation Plus (1.2 x 1000), dengan E notation minus (7 x 0.001), underscore di floating point\n";
var_dump(1.234, 1.2e3, 7e-3, 1_234.567);
echo "batas integer 32 bit, integer overflow (lewat batas) 32 bit, batas integer 64 bit, integer overflow (lewat batas) 64 bit\n";
var_dump(2147483647, 2147483648, 9223372036854775807, 9223372036854775808);

echo "\n2. boolean benar, boolean salah\n";
var_dump(true, false);

echo "\n3. String";
echo "escape sequence: \n enter \t tab, dan lainnya";
echo 'Multiline string untuk data string lebih dari 1 bardi dengan Heredoc dan Nowdoc';
echo <<<HEREDOC
ini adalah teks yang dibungkus dengan heredoc
untuk menulis string yang berjajar
tidak terbatas jajarannya, berakhir saat ditutup dengan tag pembuka jadi lebih simpel dibanding dengan petik dua\n"
HEREDOC;
echo <<<'NOWDOC'
mirip dengan heredoc, yang membedakan adalah
nowdoc tidak memiliki kemampuan parsing seperti heredoc atau double quote.
masalah parsing akan dibahas nanti.
NOWDOC;

echo "\n\n4. Variabel (bisa diubah ubah):\n";
$name = "Ahmad ";
$age = 30;
echo $name;
echo $age;
echo "\n4.1 variable variables\n";
$var = "abdul";
$$var = "ajis";
echo $abdul;

echo "\n5. Constant (tidak bisa diubah ubah) biasanya pakai huruf besar\n";
define("NAMACONSTANT", "John John\n");
define("UMUR", 100);
echo NAMACONSTANT;
echo UMUR;

echo "\n\n6. Membuat variabel kosong / mengosongkan variabel\n";
$name = null;
echo $name;
echo "6.1 Mengecek apakah data itu kosong atau tidak\n";
var_dump(is_null($name));
echo "6.2 Menghapus variabel\n";
unset($age);
var_dump(isset($name));
var_dump(isset($age));









