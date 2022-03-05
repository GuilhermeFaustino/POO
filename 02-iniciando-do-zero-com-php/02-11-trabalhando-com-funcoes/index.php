<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
    
    require __DIR__."/function.php";
    var_dump(functionName("Guilherme Mendes", "ele vai conseguir", "Um dia chegamos la"));

    var_dump(argOptions("guilherme"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$heigth = 86;
$weigth = 1.83;
echo calcIMC();
/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = PayTotal(200);
$pay = PayTotal(800);
$pay = PayTotal(300);

echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);


var_dump(myTemas("Guilherme", "fernanda", "Rafael", "Carol"));
