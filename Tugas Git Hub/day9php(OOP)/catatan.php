<?php

class mahasiswa {
    public $nim = 'habib asyrof';
    public function nim_mahasiswa() {  //ini adalah function publik yang bisa di akses
        echo $this->nim."<br>";
    }
}

$run = new mahasiswa; //cara memanggil method dalam class
$run->nim_mahasiswa(); //cara memanggil method dalam class
echo $run->nim //cara memanggil method dalam class

?>