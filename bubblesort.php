<?php


function Bubblesort($array): array
{
	for ($i = 0, $length = count($array); $i < $length; $i++) {

		for ($j = 0; $j < $length; $j++ ) {

			if ($array[$j] < $array[$j-1]) {

				list($array[$j-1], $array[$j]) = array($array[$j], $array[$j-1]);

			}
		}
	}
	
	return $array;
}

