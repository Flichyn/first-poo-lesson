<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    const ALLOWED_VEHICLES = [Bicycle::class];

    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 1;

    private int $maxSpeed = 10;

    public function addVehicle(Vehicle $newVehicle)
    {
        if (in_array($newVehicle, self::ALLOWED_VEHICLES))
            $this->currentVehicles[] = $newVehicle;
    }
}