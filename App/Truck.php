<?php

namespace App;

class Truck extends Vehicles
{
    /**
     * @var float
     */
    private $payload;

    /**
     * @return float
     */
    public function getPayload(): float
    {
        return $this->payload;
    }

    /**
     * @param float $payload
     */
    public function setPayload(float $payload): void
    {
        $this->payload = $payload;
    }
}
