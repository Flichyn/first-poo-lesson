<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private array $currentVehicles = ['Car', 'Truck',];

    private int $numberLanes = 1;

    private int $maxSpeed = 10;

    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicle(Vehicle $newVehicle)
    {
        $message = '';
        if ($newVehicle instanceof Car || $newVehicle instanceof Truck) {
            $message = 'It\'s a pedestrian way here, you jerk !';
        } else {
            $this->currentVehicles[] = $newVehicle;
            $message = 'Bicycles are allowed here, come on boy !';
        }
        return $message;

    }
}