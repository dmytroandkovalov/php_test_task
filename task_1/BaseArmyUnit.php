<?php

abstract class BaseArmyUnit implements ArmyPower
{
    protected int $weight = 0;
    protected int $capacity = 0;

    public function weight(): int
    {
        return $this->weight;
    }

    public function capacity(): int
    {
        return $this->capacity;
    }
}
