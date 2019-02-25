<?php

Class lectionTask
{
    private $result = [];

    public function myFunction($array , $number)
    {
        foreach($array as $key => $value) {
            foreach($array as $key2 => $value2) {
                if ($value + $value2 === $number && !in_array([$key2, $key], $this->result)) {
                    array_push($this->result, [$key, $key2]);
                }
                continue;
            }
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}

$lectionTask = new lectionTask();

$array = [2, 7, 13, 8, 1, 2, 7];

$number = 9;

$lectionTask->myFunction($array, $number);

$result = $lectionTask->getResult();

print_r($result);

