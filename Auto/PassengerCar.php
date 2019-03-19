<?php

require_once __DIR__.'\Car.php';

Class PassengerCar extends Car
{
    /**
     * @var string
     */
    private $equipment;

    /**
     * @param $equipment
     * @return void
     */
    public function setEquipment($equipment): void
    {
        $this->equipment = $equipment;
    }

    /**
     * @return string
     */
    public function getEquipment(): string
    {
        if(isset($this->equipment)) {
            return $this->equipment;
        } else {
            throw new RuntimeException('Passenger car equipment wasn`t set');
        }
    }
}
