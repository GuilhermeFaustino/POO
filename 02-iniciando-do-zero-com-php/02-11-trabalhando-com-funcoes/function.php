<?php
function functionName($args1, $args2, $args3){
    $array = [$args1, $args2, $args3];
    return $array;
}

function argOptions($args1, $args2= true, $args3 = null){
    $array = [$args1, $args2, $args3];
    return $array;
}

function calcIMC(){
    global $weigth;
    global $heigth;
    return $weigth / ($heigth * $heigth);
}

function PayTotal($price){

    static $total;
    $total += $price;
    return "<p> O total a pagar é R$ ".number_format($total, "2", ",", ".")."</p>";

}


function myTemas(){
    $steamNames = func_get_args();
    $temaCount = func_num_args();
    return [$steamNames, "Count" => $temaCount];
}