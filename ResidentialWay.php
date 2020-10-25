<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 2;

    private int $maxSpeed = 50;

    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $newVehicle)
    {
        $this->currentVehicles[] = $newVehicle;
        return 'No worries, everybody can ride here.';
    }
}