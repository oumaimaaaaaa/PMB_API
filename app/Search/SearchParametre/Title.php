<?php

namespace App\Search\SearchParametre;

class Title 
{
        // Search for a notices based on their title.    
    public static function apply($builder, $value)
    {
        $builder->where('tit1',$value)
                ->orwhere('tit2',$value)
                ->orwhere('tit3',$value)
                ->orwhere('tit4',$value);

        return $builder;
    }
}