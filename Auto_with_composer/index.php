<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\PassengerCar;
use App\Truck;
use App\Catalog;

$passengerCar = new PassengerCar();
$passengerCar->setBrand('Volvo');
$passengerCar->setModel('XC90');
$passengerCar->setVin('YV4 C Z 85 2 7 7 1 328500');
$passengerCar->setYearOfManufacture('2018');
$passengerCar->setEquipment('audio, parcking etc.');


$truck = new Truck();
$truck->setBrand('Man');
$truck->setModel('V67');
$truck->setVin('GFN C Z42378842371 328500');
$truck->setYearOfManufacture('2012');
$truck->setLoadCapacity('12 ton');

$catalog = new Catalog();
$catalog->addCar($passengerCar);
$catalog->addCar($truck);
$catalog->displayCarsInfo();


