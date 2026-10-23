<?php

class produk{

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

$produk1 = new produk('P001','Laptop',1000000,5);


echo "Kode Produk: " . $produk1->KodeProduk . "<br>";
echo "Nama Produk: " . $produk1->NamaProduk . "<br>";
echo "Harga Produk: Rp " . number_format($produk1->HargaProduk, 0, ',', '.') . "<br>";
echo "Stok Produk: " . $produk1->StokProduk . "<br>";
echo "Total pajak:".$produk1->pajak()."%"."<br>";

echo "Total Harga: Rp " .$produk1->total();
