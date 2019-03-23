<?php

require_once __DIR__.'\Car.php';

class Truck extends Car
{
    /**
     * @var string
     */
    private $loadCapacity;

    /**
     * @return void
     * @param string
     */
    public function setLoadCapacity(string $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getLoadCapacity(): string
    {
        if(isset($this->loadCapacity)) {
            return $this->loadCapacity;
        }

            throw new \RuntimeException('Truck load capacity wasn`t set');
    }
}
