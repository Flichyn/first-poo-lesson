<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = ['fuel', 'electric'];

    /**
     * @var string
     */
    private $energy = 'fuel';

    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake = true;


    public function __construct(string $color, int $seatsNumber, string $energy)
    {
        parent::__construct($color, $seatsNumber);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): string
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this->energy;
    }

    public function getEnergyLevel(): string
    {
        return 'Your energy level is full.';
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $boolean)
    {
        $this->hasParkBrake = $boolean;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('You have to unset the park brake.');
        }
        return 'My car rolls like a donut !';
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}