<?php

namespace App;

class Car extends Vehicles
{
    /**
     * @var string
     */
    private $equipment;

    /**
     * @return string
     */
    public function getEquipment(): string
    {
        return $this->equipment;
    }

    /**
     * @param string $equipment
     */
    public function setEquipment(string $equipment): void
    {
        $this->equipment = $equipment;
    }
}
