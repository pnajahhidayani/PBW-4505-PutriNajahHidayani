<?php
function is_prime($number){

    if ($number == 1){ //1 bukan bilangan prima, maka return false
        return false;
    }
    if ($number == 2){ //hanya 2 bilangan genap prima
        return true;
    }
    //algoritma yg mempercepat pengujian bilangan
    $x = sqrt($number);
    $x = floor($x);

    for ($i = 2; $i <= $x; ++$i){
        if ($number % $i == 0){
            break;
        }
    }
    if ($x == $i - 1){
        return true;
    } else {
        return false;
    }

}