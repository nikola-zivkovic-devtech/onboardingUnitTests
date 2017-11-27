<?php

namespace App\Collections;

class Collection
{

    private $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function returnSumOfAllNumbers()
    {
        $sum = 0;

        foreach ($this->items as $item) {
            if (is_numeric($item)) {
                $sum += $item;
            }
        }

        return (double) $sum;
    }

    public function merge(Collection $collection)
    {
        return $this->addToCollection($collection->getItems());
    }

    public function addToCollection(array $items)
    {
        return $this->items = array_merge($this->items, $items);
    }

    public function toJson()
    {
        return json_encode($this->items);
    }

}