<?php
require_once 'Abstract.php';
class Lingkaran extends Bentuk2D {
    private $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        return "Lingkaran";
    }

    public function keterangan(){
        return "Jari-jari = " .$this->jari2;
    }

    public function luasBidang() {
        //pi() Fungsi ini digunakan untuk mengambil nilai π (pi) yang merupakan konstanta matematika.
        //pow()  Fungsi ini digunakan untuk menghitung hasil pangkat dari suatu bilangan. 
        return pi() * pow($this->jari2, 2);
    }

    public function kelilingBidang() {
        return 2 * pi() * $this->jari2;
    }
}

?>