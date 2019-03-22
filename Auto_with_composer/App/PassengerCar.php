<?php

namespace App;

Class PassengerCar extends Car
{
    /**
     * @var string
     */
    private $equipment;

    /**
     * @param string
     * @return void
     */
    public function setEquipment(string $equipment): void
    {
        $this->equipment = $equipment;
    }

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getEquipment(): string
    {
        if(isset($this->equipment)) {
            return $this->equipment;
        } else {
            throw new \RuntimeException('Passenger car equipment wasn`t set');
        }
    }
}
