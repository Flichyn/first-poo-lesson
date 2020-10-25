<?php


abstract class HighWay
{
    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 3;

    private int $maxSpeed = 130;

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function getNumberLanes()
    {
        return $this->numberLanes;
    }

    public function setNumberLanes(int $number)
    {
        $this->numberLanes = $number;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $number)
    {
        $this->maxSpeed = $number;
    }

    abstract public function addVehicle(Vehicle $newVehicle);
}