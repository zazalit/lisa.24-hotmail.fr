<?php
//Création de la classe
class Bicycle
{
    //Définition des attributs
    private $color;
    private $currentSpeed;
    public $nbSeats = 1;
    public $nbWheels = 2;

    // forward action
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    // brake action
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }

    // Get Set Color
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    //Get Set currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    // Setters

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    // color constructor
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}