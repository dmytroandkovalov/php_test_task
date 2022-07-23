<?php

class Spacecraft extends BaseArmyUnit
{
    private const OWN_WEIGH_TONS = 100;

    /** @param Laser[] $lasers */
    public function __construct(array $lasers)
    {
        $this->weight = self::OWN_WEIGH_TONS;

        foreach ($lasers as $laser) {
            $this->weight += $laser->weight();
            $this->capacity += $laser->capacity();
        }
    }
}