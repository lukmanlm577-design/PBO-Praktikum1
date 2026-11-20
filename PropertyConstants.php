<?php
namespace PBO\MarketPlace;
class Produk {

    private string $KodeProduk;
    private string $NamaProduk;
    private int $HargaProduk;
    private int $StokProduk;

    public const PAJAK = 0.11;

    public function __construct() {

    }
    // setters
    public function setKodeProduk($KodeProduk) {
        $this->KodeProduk = $KodeProduk;
        return $this;
    }
    public function setNamaProduk($NamaProduk) {
        $this->NamaProduk = $NamaProduk;
        return $this;
    }
    public function setHargaProduk($HargaProduk) {
        if ($HargaProduk <= 0) {
            echo "Harga produk tidak boleh negatif atau NULL";
            exit;
        }
        $this->HargaProduk = $HargaProduk;
        return $this;
    }
    public function setStokProduk($StokProduk) {
        if ($StokProduk <= 0) {
            echo "Stok produk tidak boleh negatif atau NULL";
            exit;
        }
        $this->StokProduk = $StokProduk ;
        return $this;
    }

    // getters
    public function getKodeProduk() {
        return $this->KodeProduk;
    }
    public function getNamaProduk() {
        return $this->NamaProduk;
    }
    public function getHargaProduk() {
        return  $this->HargaProduk;
    }
    public function getStokProduk() {
        return $this->StokProduk;
    }


    // menghitung pajak dan total harga

    public function pajak(){
        return self::PAJAK *100;
    }
    public function total() {
        return $this-> HargaProduk + ($this->HargaProduk * self::PAJAK);
    }

}       
