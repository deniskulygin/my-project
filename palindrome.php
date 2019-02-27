<?php

$string = 'abcba';

    if(is_string($string))
    {
    $lenth = strlen($string);
    if(($lenth % 2) !== 0 )
    {
        $partLenth = ceil ($lenth/2);
        $firstPart = substr($string,0,$partLenth);
        $secondPart = substr($string, -$partLenth);
        if($firstPart === strrev($secondPart))
        {
            exit("true".PHP_EOL);
    }
        exit("false".PHP_EOL);
    }
    exit("false".PHP_EOL);
}
exit("false".PHP_EOL);