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
        $quantity['cows'] = $this->farm->addCow($cows);
        $quantity['chikens'] = $this->farm->addChiken($chikens);
        $result['cows'] = $this->farm->takeMilk($quantity['cows']);
        $result['chikens'] = $this->farm->takeEggs($quantity['chikens']);

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
