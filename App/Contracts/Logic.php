<?php

namespace Contracts;

use Contracts\Farm;

class Logic
{
    private $farm;
    public $cows;
    public $chikens;

    public function __construct()
    {
        $this->farm = new Farm();
    }

    public function start(array $cows, array $chikens)
    {
        $quantity['cows'] = $this->farm->addAnimal($cows);
        $quantity['chikens'] = $this->farm->addAnimal($chikens);
        $result['cows'] = $this->farm->collectAnimalProducts($quantity['cows'], 8, 12);
        $result['chikens'] = $this->farm->collectAnimalProducts($quantity['chikens'], 0, 1);

        foreach($result['cows'] as $key => $value){
            $total += $value;
        }

        foreach($result['chikens'] as $key => $value){
            $total += $value;
        }

        $result['total'] = $total;

        return $result;
    }
}
