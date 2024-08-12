<?php

$nama = "Bambang";     // String 
$age = 20; // Integer
$Bb = 65.6; // Float 
$IsMerried = False; // Boolean
$AssetBambang = array("Merc","Bmw","Alphard","Helikopter"); // Array
$AssetBambang[0] = 'Lambo';



$Santri = array(
    "Id" => "01234",
    "Nama" => "Bambang",
    "Umur" => "20",
);

$Santri2 = [
    "Id" => "01234",
    "Nama" => "Bambang",
    "Umur" => "20",
    
];

// var_dump($nama);
// var_dump($age);
// var_dump($Bb);
// var_dump($IsMerried);
// var_dump($Santri);
// var_dump($Santri2);
// var_dump($Santri2);



// Santri-satri lainnya
$Santri1 = [
    "Id" => "12345",
    "Nama" => "Ahmad",
    "Umur" => "21",
];

$Santri2 = [
    "Id" => "01234",
    "Nama" => "Bambang",
    "Umur" => "20",
];

// Menggabungkan semua santri ke dalam satu array
$semuaSantri = [$Santri1, $Santri2];

// Menambahkan santri baru beserta ID nya
$SantriBaru = [
    "Id" => "56789",
    "Nama" => "Candra",
    "Umur" => "22",
];

$semuaSantri[] = $SantriBaru;

// Menambahkan santri lainnya
$SantriLainnya = [
    [
        "Id" => "98765",
        "Nama" => "Dewi",
        "Umur" => "19",
    ],
    [
        "Id" => "24680",
        "Nama" => "Eka",
        "Umur" => "23",
    ],
];

$semuaSantri = array_merge($semuaSantri, $SantriLainnya);

// Menampilkan hasilnya
// print_r($semuaSantri);



$mobil1 = [
    "Merk" => "Mercedez bens",
    "Plat" => "B1234C",
    "Warna" => "Hitam"
];

$mobil2 = [
    "Merk" => "Lamboirgini",
    "Plat" => "B1234C",
    "Warna" => "Pink"

];
$mobil3 = [
    "Merk" => "Ferrari",
    "Plat" => "B1234C",
    "Warna" => "Biru"

];

$mobil4 = [
    [
        "Merk" => "Civic",
        "Plat" => "B1234C",
        "Warna" => "Putih"
    ],
    [
        "Merk" => "Ducati",
        "Plat" => "B1234C",
        "Warna" => "Kuning"
    ],
    ];

// $semuaMobil = [$mobil1,$mobil2,$mobil3,$mobil4];

// $semuaMobil[] = [$mobil1,$mobil2,$mobil3,$mobil4];

$mobil3 = array_merge($mobil3,$mobil4);

var_dump($mobil3);