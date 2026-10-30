<?php
Require('./PropertyConstants.php');
Use PBO\MarketPlace\Produk;

$produk1 = new Produk('P001','Laptop',1000000,5);


echo "Kode Produk: " . $produk1->KodeProduk . "<br>";
echo "Nama Produk: " . $produk1->NamaProduk . "<br>";
echo "Harga Produk: Rp " . number_format($produk1->HargaProduk, 0, ',', '.') . "<br>";
echo "Stok Produk: " . $produk1->StokProduk . "<br>";
echo "Total pajak:".$produk1->pajak()."%"."<br>";

echo "Total Harga: Rp " .$produk1->total();
?>