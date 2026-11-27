<?php

namespace PBO\MarketPlace;

require_once('./PropertyConstants.php');

use PBO\MarketPlace\Produk;

class Jasa{
    
    use Produk;
    
    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "hanya menerima pembayaran melalui Virtual Account dan QRIS",
        };
        
    }

}