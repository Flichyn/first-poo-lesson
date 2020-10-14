<?php
 class Truck extends Vehicle
 {
     /**
      * @param int
      */
     private $storageCapacity;

     /**
      * @param int
      */
     private $load = 0;

     /**
      * @var string
      */
     private $energy;

     /**
      * @param int
      */
     private $energyLevel = 100;

     public function __construct(string $color, int $seatsNumber, int $storageCapacity, int $load, string $energy)
     {
         parent::__construct($color, $seatsNumber);
         $this->storageCapacity = $storageCapacity;
         $this->load = $load;
         $this->energy = $energy;
     }

     public function getLoad()
     {
         return $this->load;
     }

     public function setLoad(int $number)
     {
         $this->load = $number;
     }

     public function isFull()
     {
         if ($this->load === $this->storageCapacity) {
             return 'Full.';
         } elseif ($this->load < $this->storageCapacity && $this->currentSpeed === 0) {
             return 'In filling';
         } else {
             return 'You must be stopped to load the truck !';
         }
     }
 }