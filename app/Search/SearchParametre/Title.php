<?php

namespace App\Search\SearchParametre;

class Title 
{
        // Search for a notices based on their title.    
    public static function apply($builder, $value)
    {
        $builder->where('tit1','like','%'.$value.'%')
                ->orwhere('tit2','like','%'.$value.'%')
                ->orwhere('tit3','like','%'.$value.'%')
                ->orwhere('tit4','like','%'.$value.'%');

        return $builder;
    }
}