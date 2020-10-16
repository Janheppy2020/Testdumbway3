<?php
function hitungBarang($type, $qty) {
    switch ($type) {
        case "A":
            $harga = 3000;
            if ($qty > 10) {
                $bonus = $harga - 500;
                $total = $bonus * $qty;
                
                echo 'Total Harga Barang = Rp. \n', $qty * $harga ;
                echo 'Potongan Harga Barang = Rp. \n', $qty * 5 ;
                echo 'Total Harga yang dibayar = Rp. ', $total;
            }
            break;
        case "B":
            $harga = 3500;
            if ($qty > 5) {
                $bonus = $harga * $qty * 50 / 100;
                $total = ($harga * $qty) - $bonus;
                
                echo 'Total Harga Barang = Rp. \n', $qty * $harga;
                echo 'Potongan Harga Barang = Rp. \n', $bonus;
                echo 'Total Harga yang dibayar = Rp. \n', $total;
            }
            break;
        default:
            $harga = 5000;
            $total = $harga * $qty;
            
            echo 'Total Harga Barang = Rp. \n', $total;
            echo 'Potongan Harga Barang = Rp. 0 \n';
            echo 'Total Harga yang dibayar = Rp. \n', $total;
    }

    
}

hitungBarang("A", 11);
?>