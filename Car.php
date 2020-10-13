<?php

class Car
{
    /**
     * @var integer
     */
    private $wheelsNumber;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $seatsNumber;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;


    public function __construct(string $color, int $seatsNumber, string $energy)
    {
        $this->color = $color;
        $this->seatsNumber = $seatsNumber;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 50;
        return 'So, you like to go fast, uh ?';
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        $sentence = 'The engine is on !';
        return $sentence;
    }

    public function setWheelsNumber(int $number): int
    {
        return $this->wheelsNumber = $number;
    }

    public function getWheelsNumber(): int
    {
        return $this->wheelsNumber;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSeatsNumber(): int
    {
        return $this->seatsNumber;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): string
    {
        return 'Your energy level is full.';
    }
}