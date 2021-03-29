<?php

namespace App\Search\SearchParametre;

class Publisher 

{
    //Search for a notices based on the publisher.
    public static function apply($builder, $value)
    {
        $builder
            ->join('publishers as first_pub',function ($join){
                $join->on('first_pub.ed_id','=','notices.ed1_id')
                     ->orOn('first_pub.ed_id','=','notices.ed2_id');
            })
            ->where('first_pub.ed_name',$value);

        return $builder;
    }

}