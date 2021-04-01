<?php

namespace App\Search\SearchParametre;
use Illuminate\Support\Facades\DB;

class AllNotice
{
        // Search for all notices.    
    public static function apply($request)
    {
        $list_notice=DB::table('notices');
        return $list_notice;
    }
}