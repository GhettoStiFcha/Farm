<?php

namespace Contracts;

class Farm
{

    public function addCow(array $cows)
    {
        array_push($cows, '0');

        return $cows;
    }

    public function addChiken(array $chikens)
    {
        array_push($chikens, '0');

        return $chikens;
    }

    public function takeMilk(array $cows)
    {
        $milkedCows = [];

        foreach($cows as $key => $value){
            $value = rand(8, 12);
            array_push($milkedCows, $value);
        }

        return $milkedCows;
    }

    public function takeEggs(array $chikens)
    {
        $eggedChikens = [];

        foreach($chikens as $key => $value){
            $value = rand(0, 1);
            array_push($eggedChikens, $value);
        }

        return $eggedChikens;
    }
    
}


