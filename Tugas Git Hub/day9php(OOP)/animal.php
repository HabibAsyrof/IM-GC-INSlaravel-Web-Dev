<?php
class animal {
    public $namaHewan, $kakihewan, $darah_dingin;
    public function __construct($namaHewan, $kakihewan, $darah_dingin){
        $this->namaHewan = $namaHewan;
        $this->kakihewan= $kakihewan;
        $this->darah_dingin = $darah_dingin;
    }
    public function output_hewan(){
        echo "Nama Hewan : $this->namaHewan <br>";
        echo "Banyak Kaki : $this->kakihewan <br>";
        echo "Berdarah : $this->darah_dingin <br>"; 
    }
    
}
?>