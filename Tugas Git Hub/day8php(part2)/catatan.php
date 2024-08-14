<?php

// pertambahan 
$c = 30;
$d = 20;
echo $c + $d . "<br>";
$c += 3; // hasilnya 33 karna 30 + 3
echo $c . "<br>"; 

echo "<br>";

// true or false 
$x = 20;
$y = 30;
var_dump($x == 20 && $y == 30 ); // hasilnya true karna isi dari vardump sesuai dengan variabel $x dan $y
echo "<br>";
// contoh 2
$z = 10;
$v = 12;
var_dump($z != 10 && $v != 12); //maka hasilnya akan false karna kita menggunakan symbol !=

echo "<br><br>";

// if else
$usia = 14;
if($usia <= 14){
    echo  "kamu masih anak - anak";
} else if($usia > 14) {
    echo "kamu sudah memasuki remaja";
} // kenapa yang muncul adalah kamu masi anak"? karna nilai "=" kita taruh di if 1

echo "<br> <br>";

// function
function tanggal() {
    $tanggal = date ('y/m/d');
    return $tanggal; 
}
echo tanggal();

echo "<br> <br>";

// looping 
$mahasiswa = array("habib", "asep", "jamal");
foreach($mahasiswa as $key => $value) {
    echo $value . "<br>";
}
?>










