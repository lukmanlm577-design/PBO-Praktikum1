<?php

class produk{

    public string $KodeProduk;
    public string $NamaProduk;
    public int $HargaProduk;
    public int $StokProduk;
   
    public const PAJAK = 0.11;
}

$produk1 = new produk();
$produk1->KodeProduk = 'P001';
$produk1->NamaProduk = 'Laptop';
$produk1->HargaProduk = 10000000;
$produk1->StokProduk = 5;


$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk1->HargaProduk * Produk::PAJAK;
$totalHarga = $produk1->HargaProduk + $jumlahPajak;

echo "Kode Produk: " . $produk1->KodeProduk . "<br>";
echo "Nama Produk: " . $produk1->NamaProduk . "<br>";
echo "Harga Produk: Rp " . number_format($produk1->HargaProduk, 0, ',', '.') . "<br>";
echo "Stok Produk: " . $produk1->StokProduk . "<br>";
echo "Pajak: " . $pajak . "%<br>";
echo "Jumlah Pajak: Rp " . number_format($jumlahPajak, 0, ',', '.') . "<br>";
echo "Total Harga: Rp " . number_format($totalHarga, 0, ',', '.') . "<br>";