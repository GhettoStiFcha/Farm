<?php

namespace Contracts;

class Farm
{

    public function addAnimal(array $animalName)
    {
        array_push($animalName, '0');

        return $animalName;
    }

    public function collectAnimalProducts(array $animalName, int $min, int $max)
    {
        $collectedProducts = [];
        foreach($animalName as $key => $value){
            $value = rand($min, $max);
            array_push($collectedProducts, $value);
        }

        return $collectedProducts;
    }
    
}


