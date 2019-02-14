<?php

isset($argv[1]) ?: exit('Insert number of * in diagonal of future Diamond'.PHP_EOL);
if(($argv[1] % 2) != true) {
    exit('It is impossible to construct a diamond which diagonal is a pair number. Please enter odd number.'.PHP_EOL);
}

$diagonal = $argv[1]/2 + 0.5;

echo PHP_EOL;

for ($i = 1; $i < $diagonal; $i++) {
    for ($j = $i; $j < $diagonal; $j++) {
        echo '  ';
    }

    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo (' *');
    }

    echo PHP_EOL;
}
for ($i = $diagonal; $i > 0; $i--) {
    for ($j = $diagonal - $i; $j > 0; $j--) {
        echo '  ';
    }

    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo (' *');
    }

    echo PHP_EOL;
}

echo PHP_EOL;

