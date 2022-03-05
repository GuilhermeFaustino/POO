<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O ultimo show de joão gomes foi demais!";

var_dump([
    "string"=> $string,
    "strlen" =>strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, "13"),
    "mb_substr" => mb_substr($string, "13"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string),
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mb_string = $string;

var_dump([
    "mb_strtoupper" => mb_strtolower($mb_string),
    "mb_strtolower" => mb_strtolower($mb_string),
    "mb_convert_case UPPER" => mb_convert_case($mb_string, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mb_string, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mb_string, MB_CASE_TITLE),
]);
/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mb_string."e foi, assim que comeco aprender, novamente";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 +2, 14),
]);

$mbStrReplace = $mbReplace;

echo "<p>", $mbStrReplace, "</p>";
echo "<p>", str_replace("joão gomes", "Calcinha preta", $string); "</p>";


$article = <<<ROCK
    <article>
            <h3>detent</h3>
            <p>desc</p>
    </article>
ROCK;

$articleData = [
    "detent" => "Rock",
    "desc" => "in rio"
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);


$parseString = "email=guilhermemendes.info@gmail.com&nome=Guilherme Mendes";
mb_parse_str($parseString, $parse);

var_dump([
    $parseString,
    $parse,
    (object)$parse
]);