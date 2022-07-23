<?php

class Army extends BaseArmyUnit
{
    /** @param Spacecraft[] $spacecrafts */
    public function __construct(array $spacecrafts)
    {
        foreach ($spacecrafts as $spacecraft) {
            $this->weight += $spacecraft->weight();
            $this->capacity += $spacecraft->capacity();
        }
    }
}
