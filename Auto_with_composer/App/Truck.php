<?php

namespace App;

Class Truck extends Car
{
    /**
     * @var string
     */
    private $loadCapacity;

    /**
     * @return void
     * @param string
     */
    public function setLoadCapacity($loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * @return string
     * @throws RuntimeException
     */
    public function getLoadCapacity(): string
    {
        if(isset($this->loadCapacity)) {
            return $this->loadCapacity;
        } else {
            throw new RuntimeException('Truck load capacity wasn`t set');
        }
    }
}
