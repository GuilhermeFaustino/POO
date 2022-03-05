<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while($looping <= 5){
    $while[] = $looping;
    $looping++;
}

var_dump($while);

/*execute enquanto for verdade*/

$looping = 10;
$while = [];
do {
    $while[] = $looping;
    $looping--;
}while($looping >= 1);

var_dump($while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for($i =0; $i <=10; $i++){
    echo "<p>{$i}</>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c =0; $c <=10; $c++){

    if($c % 2 == 1){
        continue;
    }

    if($c > 10){
        break;
    }
    echo "<p>pulou de 2 em  2 = {$c}</>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];
for($a =0; $a <=2; $a++){
    $array[] = $a; 
}

var_dump($array);

foreach($array as $item){
    var_dump($item);
}
