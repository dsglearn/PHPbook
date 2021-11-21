<?php

$text = "ну что.      не смотрел еще black mesa.я собирался скачать  ,но все как-то некогда было.";

$arrayOfStrings = preg_split('/\./ui', $text);

function mb_ucfirst($string) : string
{
    $firstSymbol = mb_substr($string, 0, 1);
    return mb_strtoupper($firstSymbol) .  mb_substr($string, 1);

}
foreach ($arrayOfStrings as $string) {
    $string = trim($string);
    $string = mb_ucfirst($string);
    echo "$string \n";
}