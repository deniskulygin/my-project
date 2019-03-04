<?php

class Queue
{
    /**
     * @var int
     */
    private $head = 0;

    /**
     * @var int
     */
    private $tail = 0;

    /**
     * @var array
     */
    private $hranilishche = [];

    /**
     * @return int
     */
    public function getTail(): int
    {
        return $this->tail;
    }

    /**
     * @param $value
     * @return void
     */
    public function in($value): void
    {
        $this->hranilishche[$this->tail++] = $value;
    }

    /**
     * @return bool
     */
    public function isEmpty() {
        return $this->head === $this->tail;
    }

    /**
     * @return mixed
     */
    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Queue is empty");
        }
        $res = $this->hranilishche[$this->head++];
        if($this->head > $this->tail) {
            $this->head = $this->tail = 0;
        }
        return $res;
    }
}
$obj = new Queue();

$obj->in(5);
$obj->in(10);
$obj->in(14);
$obj->in(8);

$stack = new Queue();


$arrsy = [];

$counter = $obj->getTail();
while(!$obj->isEmpty()) {
    $array[$counter] = $obj->out();

    $counter--;
}
$counter = 1;
foreach ($array as $key => $v) {
    $stack->in($array[$counter]);
    $counter++;
}

while(!$stack->isEmpty())
{
    echo $stack->out().PHP_EOL;
}


