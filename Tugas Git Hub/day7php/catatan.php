<?php

// variabel pada php 
$variabel = 'garuda cyber';
// output standar pada php
// echo

// variabel pada php 
$variabel = 'garuda cyber';
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 
// output standar pada php
// echo
echo $variabel;
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 
// print
print $variabel;
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 
// print_r
print_r($variabel);
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 
// var_dump
var_dump($variabel);
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 

// cara mengetahui panjang isi dari variable
echo strlen($variabel);
echo "<br>"; //ini berguna untuk mengkebawahi element selanjutnya 

// cara mengambil perkata pada php 
$kata = "saya habib dan saya ganteng";
// ambilah kata kedua pada habib pada variabel $kata 
echo "<br>" . substr($kata, 5,5);
echo "<br> <br>";

// strcmp di gunakan untuk membandingkan kesamaan antara dua variabel string, contoh :
$oldpassword = 'garuda cyber';
$newpassword = 'garuda cyber';
$output = strcmp($oldpassword, $newpassword);
if($output !== 0) {
    echo "sandi yang anda masukkan salah";
} else {
    echo "sandi yang anda masukkan benar";
}
echo "<br> <br>";


// untuk membuat huruf capital 
echo strtoupper($variabel);
echo "<br>";
// untuk membuat huruf kecil 
echo strtolower($variabel);
echo "<br> <br>";

// untuk mencari posisi kata
$variabel2 = 'hallo nama saya adalah habib dan saya bersekolah di smk muhammadiyah 2 dengan jurusan pplg';
$cari = 'pplg';
echo strpos($variabel2, $cari);
echo "<br>"; 
// cara menghitung berapa banyak kata 
echo str_word_count($variabel2);
echo "<br> <br>";

// array pada php 
$siswa =  array("habib", "arriel", "syahid", "nico");
$mahasiswa = array("habib", "arriel", "syahid", "nico");

var_dump($siswa);
echo "<br>";
var_dump($mahasiswa);
echo "<br> <br>";

// cara menghitung jumlah string pada array
echo "jumlah string pada siswa adalah " . count($siswa)."<br> <br>";

// cara untuk mencetak salah satu kata pada array, contoh saya ingin mencetak nama habib pada variabel diatas
var_dump($siswa[0]); //kenapa habib terletak pada index 0 ?? karna segala sesuatu di php di mulai dari 0 bukan dari 1
echo "<br>";

//cara menambah element pada array 
$mahasiswa[] = "rifky";
echo "<br>";
var_dump($mahasiswa);
echo "<br> <br>";

// cara menghitung berapa array pada variabel siswa
var_dump(count($siswa)); // dimulai dari 1
echo "<br> <br>";

// cara mengganti kata
$gantikata = "habib ganteng";
echo $gantikata . "<br>";
// ganti lah kata ganteng menjadi jelek !
echo str_replace("ganteng", "jelek", $gantikata) . "<br> <br>";

?>
