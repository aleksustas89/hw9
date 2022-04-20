<?php

namespace Hillel;

class ShawarmaCalculator
{
    private array $result = array();

    public function add(Shawarma $shawarma)
    {
        array_push($this->result, $shawarma);
    }

    public function ingredients(): array
    {

        $ingredients = array();

        foreach ($this->result as $object) {
            if (count($object->ingredients) > 0) {
                foreach ($object->ingredients as $ingredient) {
                    $ingredients[] = $ingredient;
                }
            }
        }

        return array_unique($ingredients);
    }

    public function price(): float|int
    {
        $price = 0;

        foreach ($this->result as $object) {
            $price += $object->price > 0 ? $object->price : 0;
        }

        return $price;
    }
}
