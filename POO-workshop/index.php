<?php
require 'src/Cat.php';
require 'src/Collar.php';

$collar = new \Animals\Collar(10, 'red');
$charles = new \Animals\Cat('Charles', 'white', $collar);
$jeanLouis = new \Animals\Cat('Jean-Louis', 'black');

$charles->setImage('src/img/whiteCat.jpg');
echo $charles->getImage();
echo $charles->getTiredness();

while ($charles->getTiredness() < 100) {
    $charles->walk();
    echo $charles->getTiredness();
}

$charles->rest(); ?> <br/>
<?php

echo $charles->getTiredness();
?> <br/><br/> <?php
//----------------------------------------------

$jeanLouis->setImage('src/img/blackCat.jpg');
echo $jeanLouis->getImage();
echo $jeanLouis->getTiredness();

while ($jeanLouis->getTiredness() < 100) {
    $jeanLouis->walk();
    echo $jeanLouis->getTiredness();
}

$jeanLouis->rest(); ?> <br/>
<?php

echo $jeanLouis->getTiredness();
$jeanLouis->setColor('red');
echo $jeanLouis->getColor();

$jeanLouis->setTiredness(110);
echo $jeanLouis->getTiredness();

