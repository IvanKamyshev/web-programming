<?php

function increaseEnthusiasm($string): string
{
    return $string . "!";
}
echo increaseEnthusiasm("Солнце светит") . "\n";

function repeatThreeTimes($string): string
{
    return $string . $string . $string;
}
echo repeatThreeTimes("Небо голубое ") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("Облака ")) . "\n";

function cut($string, $length = 10): string
{
    return substr($string, 0, $length);
}

echo cut("Птицы") . "\n";

function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . "\n";
        printArrayRecursively($arr, $index + 1);
    }
}

$arr = [1, 2, 3, 4, 5, 6];
printArrayRecursively($arr);

echo "\n";

function sumDigits(int $number): int {
    while ($number > 9) {
        $number = array_sum(str_split((string) $number));
    }
    return $number;
}
$number = 12345;
echo "Сумма цифр числа $number: " . sumDigits($number) . "\n";