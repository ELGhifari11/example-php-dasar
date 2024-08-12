<?php

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

// echo $person1 ->greet();
// echo $person2 ->greet();


// KONSTUKTOR & DESKTRUKTOR //













$namaArray = [

    "Aditya Pratama",
    "Budi Santoso",
    "Citra Dewi",
    "Dewi Lestari",
    "Eka Sari",
    "Fajar Wibowo",
    "Fajar Gibran",
    "Gita Permata",
    "Hadi Nugroho",
    "Indra Permana",
  ];








// for ($i=1; $i < count($namaArray); $i++) { 
//     echo("Santri ".$i." : ".$namaArray[$i]);
//     echo("\n");
// }
// echo "///////////////////////////////////////";
// echo("\n");

// foreach($namaArray as $key  => $value){
//     echo("Santri ".$key." : ". $value);
//     echo("\n");
//     // echo ("Urutan: " .$Test . "\n");
//     // echo ("Nama Santri: " .$value . "\n");
// }


$tinggi = 5; // Tinggi piramida

// for ($i = 1; $i <= $tinggi; $i++) {
//     // Mencetak spasi sebelum karakter +
//     for ($j = 1; $j <= ($tinggi - $i); $j++) {
//         echo " ";
//     }

//     // Mencetak karakter +
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "+";
//     }

//     // Pindah ke baris baru setelah mencetak satu baris piramida
//     echo "\n";
// }

class Sidaq{
    public $nama;
    public $jurusan;
    public $asal;

    public function __construct($nama,$jurusan,$asal){
        $this ->nama = $nama;
        $this ->jurusan = $jurusan;
        $this ->asal = $asal;
    }
    
    public function biodata(){
        return "Nama saya {$this->nama} Saya belajar jurusan {$this->jurusan} Saya tinggal di {$this->asal} ";
    }
    public function salam(){
        return "Halo {$this->nama} selamat datang Di PIT";
    }
}

class Pit extends Sidaq {
    public function __construct($nama,$jurusan,$asal){
        parent::__construct($nama,$jurusan,$asal,);
    }
    
}
class Pit2 extends Sidaq {
    public function __construct($nama,$jurusan,$asal){
        parent::__construct($nama,$jurusan,$asal);
    }
}

$PitDiy = new Pit(nama:"Fajar123",jurusan:"Programmer",asal:"Bantul");
$PitDiy2 = new Pit(nama:"Gibran Fajar",jurusan:"Wordpress",asal:"Sleman");
$PitDiy3 = new Pit2(nama : "bambang",jurusan:"Wordpress",asal:"Sleman");
$PitDiy4 = new Pit(nama : "Fulan",jurusan:"UIUX",asal:"DIY");

// echo $PitDiy->biodata();
// echo "\n";
// echo $PitDiy->salam();
// echo "\n";
// echo $PitDiy2->biodata();
// echo "\n";
// echo $PitDiy2->salam();
// echo "\n";
// echo $PitDiy3->salam();
// echo "\n";
// echo $PitDiy4->Selamat();

 
class NamaOrang {
    // Properti
    public $nyong;
    public $age;

    public function __construct($nyong,$age){
        $this ->nyong = $nyong;
        $this ->age = $age;
       
    }

    // Metode
    public function greet() {
        return "Hello, my name is " . $this->nyong . " Usia saya ". $this->age;
    }
}

class OrangBaru extends NamaOrang {
    public function message(){
        echo "Siapa Nama kamu ?";
    }
}


$Wadah = new NamaOrang(nyong: "Bambang",age:99);
$Wadah2 = new OrangBaru(nyong: "Bambang",age:99);

echo $Wadah2->message();
echo "\n";
echo $Wadah->greet();
echo "\n";



























?>