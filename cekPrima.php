<?php
function cekPrima($n, $m){
    $jumlah = 0;
    for ($i = $n; $i <= $m; $i){
        if (is_prime($i)){
            echo $i.', ';
            $jumlah++;
        }
    }
    echo "<br>jumlah bilangan prima ".$jumlah. "<br>";
}
cekPrima(0,100);