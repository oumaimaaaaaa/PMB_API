<?php

namespace App\Search\SearchParametre;

class Resume  
{
    //Search for a notices based on the resume.
    public static function apply($builder, $value)
    {
        $builder->where('notices.n_resume','like','%'.$value.'%');

        return $builder;
    }
}