<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 4;

    private int $maxSpeed = 130;

    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $newVehicle)
    {
        $message = '';
        if ($newVehicle instanceof Bicycle) {
            $message = 'You can\'t ride on a motorway with your bike, kiddo.';
        } else {
            $this->currentVehicles[] = $newVehicle;
            $message = 'You enter the motorway.';
        }
        return $message;
    }
}