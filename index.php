<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';

$bike = new Bicycle("blue", 1);
$car = new Car("red", 5, "diesel");


// -----Moving Bike-----

$bike->setCurrentSpeed = 0;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
?>
<br/><br/><?php


// -----Moving Car-----

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

?> <br/><br/> <?php


// -----Moving Truck-----

$monster = new Truck('white', '3', 500, 200, 'fuel'); ?>

<?= $monster->forward(); ?> <br/>
<?= 'The speed is currently at ' . $monster->getCurrentSpeed() . ' km/h. No limit !' ?> <br/>
<?= $monster->brake(); ?> <br/>
<?php echo $monster->isFull();
$monster->setLoad(500); ?> <br/>
<?= $monster->isFull(); ?> <br/>
<?= $monster->getLoad(); ?> <br/><?php

// -----Highway-----

$highway = new MotorWay();

var_dump($highway);
$highway->addVehicle($bike);
var_dump($highway);