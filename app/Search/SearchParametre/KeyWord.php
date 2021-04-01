<?php

namespace App\Search\SearchParametre;

class KeyWord
{
        // Search for a notices based on their title.    
    public static function apply($builder, $value)
    {
        $builder->where('index_l','like','%'.$value.'%');
        return $builder;
    }
}