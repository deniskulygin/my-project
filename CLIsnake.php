
<?php

isset($argv[1]) ?: exit("Enter quantity of numbers of the square's edge.".PHP_EOL);

if (strtolower($argv[2]) === "dot") {
	getDotResult($argv[1]);
} elseif (strtolower($argv[2]) === "right") {
	getRightResult($argv[1]);
} elseif (isset($argv[2])) {
    exit('Second argument must be <dot> OR <right>.'.PHP_EOL);
} 

$first = 0;

$number;

function getDotResult($edge) 
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

function getRightResult($edge) 
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