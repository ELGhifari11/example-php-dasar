<?php

// $nilaiA = 100;
// $nilaiB = 50;

// function Perkalian($nilaiA,$nilaiB) {
//     if ($nilaiA > $nilaiB) {
//         $dikalikan = $nilaiA * $nilaiB;
//         echo("Nilai " . $nilaiA . ' X ' . $nilaiB . ' = ' .  $dikalikan . "\n");
//     } else {
//         echo("Nilai tidak di kalikan \n");
//     }
// };

// print_r(Perkalian(25,24));
// print_r(Perkalian(25,10));
// print_r(Perkalian(25,8));


// Rumus Keliling Persegi panjang 
// K : Keliling , P : panjang , L : Lebar
// K = P + L + P + L
// K = 2 x (P + L)
// K = (2 x P) + (2 x L)

// Rumus Luas Persegi Panjang 
// Luas = Panjang x Lebar

function kelilingPersegi($s) {
    // k : keliling
    // s : sisi
    $k = 4 * $s;
    echo('Keliling Persegi : 4 x '.$s.' = '.$k . "\n");
}
// kelilingPersegi($s = 6);

function luasPersegi($s){
    // s : sisi
    // l : luas
    $l = $s * $s;
    echo('Luas Persegi : '.$s." x ".$s." = ".$l . "\n");
}
// luasPersegi($s = 6);

function kelilingJajaranGenjang($a,$b) {
    // k : keliling
    // a & b : panjang sisi yang berlawanan, 
    $k = $a + $b ;
    $k = $k * 2;
    echo("Keliling Jajaran Genjang : 2 x ($a + $b) = $k \n");
}
// kelilingJajaranGenjang($a = 10, $b = 6);

function luasJajaranGenjang($a,$t){
    // l : luas
    // a : alas
    // t : tinggi
    $l = $a * $t;
    echo("Luas Jajaran Genjang : $a x $t = $l \n");
}
// luasJajaranGenjang($t = 10, $a = 6);

function kelilingTrapesium($a,$b,$c,$d) {
    // k : keliling
    // a dan b adalah panjang sisi yang berlawanan, 
    // c dan d adalah panjang sisi yang sejajar,
    $k = $a + $b + $c + $d;
    echo("keliling trapesium : $a + $b + $c + $d = $k \n");
}
// kelilingTrapesium()

function tinggiTrapesium($l,$a,$b){
    // l : luas
    // t : tinggi
    // a dan b adalah panjang sisi yang berlawanan, 
    $t = $a + $b;
    $t = $l / $t;
    $t = $t * 2 ;
    echo("tinggi trapesium : $l / ($a + $b) x 2 = $t \n");
}
// tinggiTrapesium($l = 306,$a = 10,$b = 24);

function luasTrapesium($a,$c,$t){
    // l : luas
    // t : tinggi
    $l = $a + $c;
    $l = $l * $t;
    $l = $l / 2;
    echo("luas trapesium : 1/2 x ($a + $c) x $t = $l \n");
    
}
// luasTrapesium($a = 6,$c = 10, $t = 4);


function penjumlah(...$nilai){
    $total = 0;
    foreach ($nilai as $jumlah){
        $total += $jumlah;
    }
    echo ($total. "\n");
}

// penjumlah(25,25,25,25);



// kelilingPersegi(6);
// luasPersegi(10);


function kelilingSegitiga($a,$b,$c){
    $k = $a + $b + $c;
    echo("keliling segitiga : $a + $b + $c = $k \n");
}

function luasSegitiga($a,$t){
    $l = $a * $t;
    $l = $l / 2;
    echo("luas segitiga : 1/2 x $a x $t = $l \n");
}

// luasSegitiga($a = 8,$t = 7);

class Person {
    // Properties (Variabel)
    public $name;
    public $age;

    // Method
    public function greet() {
        return "Hello, my name is $this->name and I am $this->age years old.\n";
    }
}

$person1 = new Person();
$person1 ->name = "Bambang";
$person1->age = 30;

$person2 = new Person();
$person2 ->name = "Asep";
$person2->age = 50;

echo $person1 ->greet();
echo $person2 ->greet();


















?>