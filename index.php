<?php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle("blue");
$car = new Car("red", 5, "diesel");
var_dump($bike);

$bike->setCurrentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
?>
<br/><br/>
<?php
echo $car->forward(), PHP_EOL;

echo $car->brake(), PHP_EOL;

echo $car->start(), PHP_EOL;

$car->setWheelsNumber(4);
echo 'The car has ' . $car->getWheelsNumber() . ' wheels.', PHP_EOL;

echo 'The speed is currently at ' . $car->getCurrentSpeed() . ' km/h. No limit !', PHP_EOL;
echo 'The color of the car is ' . $car->getColor() . '.', PHP_EOL;
echo 'The car has ' . $car->getSeatsNumber() . ' seats.', PHP_EOL;
echo 'The fuel for this car is ' . $car->getEnergy() . '.', PHP_EOL;
echo $car->getEnergyLevel(), PHP_EOL;
