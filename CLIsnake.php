
<?php

isset($argv[1]) ?: exit('Enter quantaty of numbers in the edge of the square .'.PHP_EOL);

if ($argv[2] === "dot") {
	Dot($argv[1]);
} elseif ($argv[2] === "right") {
	Right($argv[1]);
} elseif (isset($argv[2])) {
    exit('Second argument must be <dot> OR <right>.'.PHP_EOL);
} 

$first = 0;

$number;

function Dot($edge) 
{
	for ($i = 0; $i < $edge; $i++) {
    	for ($j = 0; $j < $edge; $j++) {
    		global $first;
  			$first += 1;
        	echo " $first ";
    	}
    	echo PHP_EOL;
	}
}

function Right($edge) 
{
	for ($i = 1; $i <= $edge; $i++) {
		    global $number;
    		$number = $i;
    	for ($j = 1; $j <= $edge; $j++) {
    		if($j != 1) {
    			$number += $edge;
    		}
        	echo " $number ";
    	}
    	echo PHP_EOL;
	}
}