<?php

class Stack
{
    /**
     * @var int
     */
    private $top = 0;

    /**
     * @var array
     */
    private $hranilishche = [];

    /**
     * @param $value
     * @return void
     */
    public function in($value): void
    {
        $this->hranilishche[$this->top++] = $value;
    }

    /**
     * @return bool
     */
    public function isEmpty() {
//        return empty($this->top);
        return $this->top === 0;
    }

    /**
     * @return mixed
     */
    public function last() {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->hranilishche[$this->top-1];
    }

    /**
     * @return mixed
     */
    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->hranilishche[--$this->top];
    }
}
$obj = new Stack();


$obj->in(5);
$obj->in(10);
$obj->in(14);
$obj->in(8);


$queue = new Stack();

while(!$obj->isEmpty())
{
    $queue->in($obj->out());
}
while(!$queue->isEmpty())
{
    echo $queue->out().PHP_EOL;
}
