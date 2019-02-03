<?php

$input = end($argv);

countCurrency($input);

function countCurrency($sum)
{
    $currencyNotes = [2000, 500, 200, 100, 50, 20, 10, 5, 1];
    $noteCounter = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $inputSum = $sum;
    for ($i = 0; $i < 9; $i++) {
        if ($sum >= $currencyNotes[$i]) {
            $noteCounter[$i] = intval($sum / $currencyNotes[$i]);
            $sum = $sum - $noteCounter[$i] * $currencyNotes[$i];
        }
    }
    echo 'Input: ' . "$inputSum" . PHP_EOL . 'Output: '. PHP_EOL;
    for ($i = 0; $i < 9; $i++) {
        if ($noteCounter[$i] != 0) {
            echo ($currencyNotes[$i] . " : " .
                $noteCounter[$i] . PHP_EOL);
        }
    }
}

