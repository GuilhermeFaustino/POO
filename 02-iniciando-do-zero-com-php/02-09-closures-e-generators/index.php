<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
function myAge($year){
    $age = date("Y") - $year;
    return "<p> Você tem {$age} Anos;</p>";
}

echo myAge("1981");

function price($pricebl){
    return '<p> O preco é '.number_format($pricebl, 2, ",", ".");
}

 echo price("3600");

 $myCart = [];
$myCart["totalPrice"] = 0;
$cart = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cart("jquery", 1, 579);
$cart("HTML", 1, 579);

var_dump($myCart);
var_dump($myCart, $cart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$itarator = 4000;

function showdays($days){

    $saveDate = [];
    for($day = 1; $day < $days; $day++){
        $saveDate[]  = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach(showdays(1) as $fdays){
    echo "<small class='tag'>{$fdays}</small>". PHP_EOL;
}

echo "</div>";


/*********** */
fullStackPHPClassSession("generators", __LINE__);

Function showgenerator($days)
{

    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showgenerator($itarator) as $fdays) {
    echo "<small class='tag'>{$fdays}</small>" . PHP_EOL;
}





?>