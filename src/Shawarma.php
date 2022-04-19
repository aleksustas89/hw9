<?php

namespace Hillel;

abstract class Shawarma
{

   public float $price;

   public array $ingredients = array();

   public string $title;

   /**
    * @return float
    */
   public function getCost(): float
   {
      return $this->price;
   }

   /**
    * @return array
    */
   public function getIngredients(): array
   {
      return $this->ingredients;
   }

   /**
    * @return string
    */
   public function getTitle(): string
   {
      return $this->title;
   }
}