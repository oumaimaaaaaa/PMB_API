<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'id_word', 'word', 'lang', 'double_metaphone', 'stem'
    ];*/

    protected $table ="words";
    /*
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     
    protected $hidden = [];*/
}