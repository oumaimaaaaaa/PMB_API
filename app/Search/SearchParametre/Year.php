<?php

namespace App\Search\SearchParametre;

class Year 
{
    //Search for a notices based on the year.
    public static function apply($builder, $value)
    {
        $builder->where('year',$value);
                

        return $builder;
    }
}