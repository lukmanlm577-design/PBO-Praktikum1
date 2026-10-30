<?php
namespace PBO\MarketPlace;
class Produk{

    public string $KodeProduk;
    public string $NamaProduk;
    public int $HargaProduk;
    public int $StokProduk;

    public const PAJAK = 0.11;
    public function __construct($kode,$nama,$harga,$stok) {
        $this -> KodeProduk = $kode;
        $this -> NamaProduk = $nama;
        $this -> HargaProduk = $harga;
        $this -> StokProduk = $stok;

    }
    public function pajak(){
        return self::PAJAK *100;
    }
    public function total() {
        return $this-> HargaProduk + ($this->HargaProduk * self::PAJAK);

    }

}       
