<?php

class Collection implements Iterator
{
    public function __construct(private readonly array $array, private int $position = 0)
    {
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->array[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key()
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}

$items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$collection = new \Collection($items);

$sum = 0;

foreach ($collection as $item) {
    $sum += $item;
}

var_dump($sum);