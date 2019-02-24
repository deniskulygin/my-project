<?php

Class stackSymmetry
{
    /**
     * @var string
     *
     */
    private $v;

    /**
     * @var int
     */
    private $top = 0;

    /**
     * @var array
     */
    private $stack = [];

    public function __construct($v)
    {
        $this->v = $v;
    }


    /**
     * @param $value
     * @return void
     */
    public function pushDefaultPairs($value): void
    {
        $this->stack[$this->top++] = $value;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {

        return $this->top === 0;
    }

    /**
     * @return mixed
     */
    public function last() {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->stack[$this->top-1];
    }

    /**
     * @return mixed
     */
    public function out()
    {
        if($this->isEmpty()) {
            exit($this->v.' '.'=>'.' '.'false'.PHP_EOL);
        }
        return $this->stack[--$this->top];
    }


    /**
     * @return void
     */
    public function Compare(): void
    {
        if ($this->v == $this->out()) {
            exit($this->v.' '.'=>'.' '.'true'.PHP_EOL);
        }
        $this->Compare();
    }

}

$stackSymmetry = new stackSymmetry('{}');

$stackSymmetry->pushDefaultPairs('[]');
$stackSymmetry->pushDefaultPairs('<>');
$stackSymmetry->pushDefaultPairs('{}');
$stackSymmetry->pushDefaultPairs('()');
$stackSymmetry->Compare();








