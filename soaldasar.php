<?php
// 1. Deklarasikan Variabel:
// ========================

// Buatlah 4 variabel dengan tipe data yang berbeda
$integerVar = 10;
$floatVar = 5.5;
$stringVar = "PHP Practice";
$arrayVar = [1, 2, 3];

// Buat juga 2 variabel tambahan dengan boolean yang berbeda value
$booleanTrue = true;
$booleanFalse = false;


// 2. Gunakan Operator Logika:
// ===========================

// Terapkan operator logika AND, OR, NOT, dan XOR pada kedua variabel boolean

// AND
$hasilAnd = $booleanTrue && $booleanFalse;
// OR
$hasilOr = $booleanTrue || $booleanFalse;
// NOT pada booleanTrue
$hasilNotTrue = !$booleanTrue;
// XOR
$hasilXor = $booleanTrue xor $booleanFalse;

// Tampilkan hasil operator logika dengan penjelasan
echo "// 2. Hasil Operator Logika: \n";
echo "Hasil AND: " . ($hasilAnd ? "True" : "False") . " - Karena salah satu bernilai false, maka hasil AND adalah false.\n";
echo "Hasil OR: " . ($hasilOr ? "True" : "False") . " - Karena salah satu bernilai true, maka hasil OR adalah true.\n";
echo "Hasil NOT True: " . ($hasilNotTrue ? "True" : "False") . " - Karena NOT mengubah nilai menjadi kebalikannya, maka true menjadi false.\n";
echo "Hasil XOR: " . ($hasilXor ? "True" : "False") . " - Karena hanya satu yang true, hasil XOR adalah true.\n";


// 3. Operasi Aritmatika dan Assignment:
// =====================================

// Lakukan operasi aritmatika menggunakan variabel-variabel yang telah dideklarasikan
$hasilTambah = $integerVar + $floatVar;
$hasilKurang = $integerVar - $floatVar;
$hasilKali = $integerVar * $floatVar;
$hasilBagi = $integerVar / $floatVar;

// Gunakan operator assignment untuk memperbarui nilai variabel-variabel tersebut
$integerVar += 5; // $integerVar = 10 + 5 = 15
$floatVar *= 2;   // $floatVar = 5.5 * 2 = 11.0

// Tampilkan hasil operasi aritmatika dan assignment dengan penjelasan
echo "\n// 3. Hasil Operasi Aritmatika dan Assignment: \n";
echo "Hasil Tambah: $hasilTambah - Penjumlahan antara integer dan float.\n";
echo "Hasil Kurang: $hasilKurang - Pengurangan antara integer dan float.\n";
echo "Hasil Kali: $hasilKali - Perkalian antara integer dan float.\n";
echo "Hasil Bagi: $hasilBagi - Pembagian antara integer dan float.\n";
echo "Nilai baru integerVar: $integerVar - Setelah dilakukan operasi penambahan dengan 5.\n";
echo "Nilai baru floatVar: $floatVar - Setelah dilakukan operasi perkalian dengan 2.\n";


// 4. Gunakan Operator Perbandingan dan Identitas:
// ==============================================

// Bandingkan hasil dari operasi aritmatika yang telah Anda lakukan menggunakan semua operator perbandingan dan operator identitas
$hasilSamaDengan = $hasilTambah == $hasilKurang;
$hasilTidakSamaDengan = $hasilTambah != $hasilKurang;
$hasilIdentik = $hasilTambah === $hasilKurang;
$hasilTidakIdentik = $hasilTambah !== $hasilKurang;
$hasilLebihBesar = $hasilTambah > $hasilKurang;
$hasilLebihKecil = $hasilTambah < $hasilKurang;

// Tampilkan hasil perbandingan dan identitas dengan penjelasan
echo "\n// 4. Hasil Operator Perbandingan dan Identitas: \n";
echo "Hasil Sama Dengan: " . ($hasilSamaDengan ? "True" : "False") . " - Membandingkan apakah nilai $hasilTambah sama dengan $hasilKurang.\n";
echo "Hasil Tidak Sama Dengan: " . ($hasilTidakSamaDengan ? "True" : "False") . " - Membandingkan apakah nilai $hasilTambah tidak sama dengan $hasilKurang.\n";
echo "Hasil Identik: " . ($hasilIdentik ? "True" : "False") . " - Membandingkan apakah nilai dan tipe data $hasilTambah identik dengan $hasilKurang.\n";
echo "Hasil Tidak Identik: " . ($hasilTidakIdentik ? "True" : "False") . " - Membandingkan apakah nilai dan tipe data $hasilTambah tidak identik dengan $hasilKurang.\n";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? "True" : "False") . " - Memeriksa apakah $hasilTambah lebih besar dari $hasilKurang.\n";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? "True" : "False") . " - Memeriksa apakah $hasilTambah lebih kecil dari $hasilKurang.\n";

?>
