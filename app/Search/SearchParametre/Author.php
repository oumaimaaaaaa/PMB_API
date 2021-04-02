<?php

namespace App\Search\SearchParametre;

class Author  
{
    //Search for a notices based on the author.
    public static function apply($builder, $value)
    {
        $builder->select('notices.*','authors.author_name')
        ->join('responsability','notices.notice_id','responsability.responsability_notice')
        ->join('authors','responsability.responsability_author','authors.author_id',)
        ->where('authors.author_name','like','%'.$value.'%');

        return $builder;
    }
}