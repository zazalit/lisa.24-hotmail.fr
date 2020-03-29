<?php

//Creation de la classe
class Car
{
    //Définition des attributs
    private $nbWheels = 4;
    private $currentSpeed;
    private $nbSeats = 5;
    private $fuelLevel = 100;
    private $color;
    private $gazoleLevel;

    //start action
    public function start()
    {
        return "The car is ready !";
    }
    //forward action
    public function forward()
    {
        $this->currentSpeed = 250;
        return " Go !";
    }
    //break action
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I don't want to have accidents !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }

    // Get Set color
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    //Get Set currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 250) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    //Get Set nbWheels
    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    //Get Set fuelLevel
    public function getFuelLevel(): string
    {
        return $this->fuelLevel;
    }

    public function setFuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }
    //Get Set nbSeats
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // color- nbSeats-gazoleLevel constructor
    public function __construct( string $color,  int $nbSeats, string $gazoleLevel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->gazoleLevel = $gazoleLevel;
    }
}
