<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Guilherme Mendes";
$userLastName = "Faustino";

$UserAge = 32;

echo "<h3>{$userFirstName} {$userLastName}</h3>";

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;

var_dump($true, $false);

$bestaAge = ($UserAge > 50);

var_dump($bestaAge);



/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code  = "<article><h1>Um call back</h1></arcticle>";
$codebr = call_user_func("strip_tags", $code);

var_dump($code, $codebr);

$codemore = function ($code){
    var_dump($code);
};

$codemore("<h3>Bora Programar</h3>");


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Guilherme Mendes";
$array = [$string];
$objsct = new stdClass();
$objsct->hello = $string;
$null = null;
$int = 123456;
$float = 1.13264;
var_dump([
    $string,
    $array,
    $objsct,
    $null,
    $int,
    $float
]);
