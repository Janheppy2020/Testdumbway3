<?php
function hitungBarang($type, $qty) {
    if ($type == "A") {
        $harga = 3000;
        
        if ($qty > 10) {
            $bonus = $harga - 500;
            $total = $bonus * $qty;
            
            echo 'Total Harga Barang = Rp. '+ $qty * $harga ;
            echo 'Potongan Harga Barang = Rp. '+ $qty * 5 ;
            echo 'Total Harga yang dibayar = Rp. '+ $total;
        }
    }
    else if ($type == "A"){
        $harga = 3500;
        if ($qty > 5) {
            $bonus = $harga * $qty * 50 / 100;
            $total = ($harga * $qty) - $bonus;
            
            echo 'Total Harga Barang = Rp. '+($qty * $harga);
            echo 'Potongan Harga Barang = Rp. '+ $bonus;
            echo 'Total Harga yang dibayar = Rp. '+ $total;
        }
    }
    else {
        $harga = 5000;
        $total = $harga * $qty;
        
        echo 'Total Harga Barang = Rp. '+ $total;
        echo 'Potongan Harga Barang = Rp. 0';
        echo 'Total Harga yang dibayar = Rp. '+ $total;
    }
}

hitungBarang("A", 11);
?>