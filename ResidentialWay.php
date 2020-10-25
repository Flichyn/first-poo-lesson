<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    const ALLOWED_VEHICLES = [Car::class, Truck::class, Bicycle::class];

    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 2;

    private int $maxSpeed = 50;

    public function addVehicle(Vehicle $newVehicle)
    {
        $this->currentVehicles[] = $newVehicle;
    }
}