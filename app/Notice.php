<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'notice_id', 'typdoc', 'tparent_id', 'ed1_id', 'ed2_id', 'coll_id' , 'subcoll_id' , 'code' , 'indexint'
    //     , 'signature' , 'niveau_biblio' , '	niveau_hierar' , 'eformat' , 'date_parution' , 'statut'
    // ];
    protected $table = "notices";

    /*
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     
    protected $hidden = [];*/
}