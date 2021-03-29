<?php

namespace App\Search\SearchParametre;

class Word

{
    //Search for a notices that  that include all the words that the user is searching for.
    public static function apply($builder, $value)
    {
        $tab=explode(" ",$value); //spliting the phrase that the user is looking for

        $builder
         ->leftjoin('notices_mots_global_index','notices.notice_id','=','notices_mots_global_index.id_notice')
         ->rightJoin('words','words.id_word','=','notices_mots_global_index.num_word')
         ->whereIn('words.word',$tab);
        return $builder;
    }

}