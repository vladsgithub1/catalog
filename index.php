<?php
require_once __DIR__ . '/vendor/autoload.php';

use \App\Car;
use \App\Truck;

$car = new Car();
$car->setBrand('BMW');
$car->setEquipment('basic');
$car->setProductionYear(2018);
$car->setVin('1234567');
$car->setModel('x5');

echo $car->getBrand() . PHP_EOL;
echo $car->getEquipment() . PHP_EOL;

$truck = new Truck();
$truck->setBrand('Volvo');
$truck->setPayload(75.0);
$truck->setProductionYear(2017);
$truck->setVin('7654321');
$truck->setModel('FH16');

echo $truck->getBrand() . PHP_EOL;
echo $truck->setPayload() . PHP_EOL;

$vehicles = [];
$vehicles[] = $car;
$vehicles[] = $truck;

foreach ($vehicles as $vehicle) {
    echo PHP_EOL . $vehicle->getBrand() . PHP_EOL;
    echo $vehicle->getProductionYear() . PHP_EOL;
    echo $vehicle->getVin() . PHP_EOL;
    echo $vehicle->getModel() . PHP_EOL;
}
