<?php
Require('./PropertyConstants.php');

Use PBO\MarketPlace\Produk;

$produk1 = new Produk();
$produk1->setKodeProduk('P001')
        ->setNamaProduk('Laptop')
        ->setHargaProduk(1000000)
        ->setStokProduk(5);


echo "Nama Produk: " . $produk1->getNamaProduk() . "<br>";

echo "Harga Produk: Rp " . number_format($produk1->getHargaProduk(), 0, ',', '.') . "<br>";

echo "Stok Produk: " . $produk1->getStokProduk() . " Pcs" . "<br>";

echo "Total pajak:" . number_format($produk1->pajak(), 2, ',', '.') ."%"."<br>";

echo "Total Harga: Rp " . number_format($produk1->total(), 0, ',', '.') . "<br>";
?>