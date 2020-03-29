<?php

//
include('Bicycle.php');

// BICYCLE

//create new object
$bike = new Bicycle('red');

//forward and brake
echo $bike->forward() . '<br>';
echo ' the bicycle speed is: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';
echo ' the bicycle speed is: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo "" . "<br>";

// CAR

include ('Car.php');

//create new object
$simpsomsCar = new Car('pink',5,'gazole');
$simpsomsCar -> setCurrentSpeed(0);
$simpsomsCar -> setNbWheels(4);
$simpsomsCar -> setfuelLevel(50);

//start, forward and brake
echo $simpsomsCar->start();
echo $simpsomsCar->forward(). '<br>';
echo ' the speed of the car is: '.$simpsomsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsomsCar->brake(). '<br>';
echo 'the speed of the car is: '.$simpsomsCar->getCurrentSpeed() . ' km/h' . '<br>';
