<?php

namespace App\Search\SearchParametre;

//use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

interface Search
{
    /**
     * Apply a given search value to the builder instance.
     * 
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Request $request, $value);
}