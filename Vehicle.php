<?php

class Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $seatsNumber;

    /**
     * @var integer
     */
    protected $wheelsNumber;

    public function __construct(string $color, int $seatsNumber)
    {
        $this->color = $color;
        $this->seatsNumber = $seatsNumber;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
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

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getSeatsNumber(): int
    {
        return $this->seatsNumber;
    }

    public function setSeatsNumber(int $seatsNumber): void
    {
        $this->seatsNumber = $seatsNumber;
    }

    public function getWheelsNumber(): int
    {
        return $this->wheelsNumber;
    }

    public function setWheelsNumber(int $wheelsNumber): void
    {
        $this->wheelsNumber = $wheelsNumber;
    }
}