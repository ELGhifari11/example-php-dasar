<?php

// Ukuran gambar
$width = 800;
$height = 800;

// Membuat gambar
$image = imagecreatetruecolor($width, $height);

// Warna latar belakang (hitam)
$bgColor = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $bgColor);

// Warna titik (putih)
$pointColor = imagecolorallocate($image, 255, 255, 255);

// Koordinat sudut-sudut segitiga
$vertices = [
    [400, 50],    // Sudut atas
    [50, 750],    // Sudut kiri bawah
    [750, 750]    // Sudut kanan bawah
];

// Memulai titik acak di dalam segitiga
session_start();
if (!isset($_SESSION['x']) || !isset($_SESSION['y'])) {
    $_SESSION['x'] = rand(0, $width);
    $_SESSION['y'] = rand(0, $height);
}

$x = $_SESSION['x'];
$y = $_SESSION['y'];

// Pilih sudut secara acak
$vertex = $vertices[array_rand($vertices)];

// Hitung titik tengah antara titik saat ini dan sudut yang dipilih
$x = ($x + $vertex[0]) / 2;
$y = ($y + $vertex[1]) / 2;

// Simpan titik saat ini dalam sesi untuk iterasi berikutnya
$_SESSION['x'] = $x;
$_SESSION['y'] = $y;

// Gambar titik
imagesetpixel($image, (int)$x, (int)$y, $pointColor);

// Output gambar sebagai PNG
header('Content-Type: image/png');
imagepng($image);

// Hapus gambar dari memori
imagedestroy($image);

?>
