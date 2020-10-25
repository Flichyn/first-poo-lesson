<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    const ALLOWED_VEHICLES = [Car::class, Truck::class];

    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 4;

    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $newVehicle)
    {
        $this->currentVehicles[] = $newVehicle;
    }
}