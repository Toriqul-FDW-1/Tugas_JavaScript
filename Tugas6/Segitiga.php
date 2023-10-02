<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function keterangan(){
        return "Alas : " .$this->alas . "<br> Tinggi : " .$this->tinggi;
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return $this->alas + $this->tinggi;
    }
}
?>