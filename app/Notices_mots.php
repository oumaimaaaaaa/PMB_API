<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices_mots extends Model
{

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'id_notice', 'code_champ', 'code_ss_champ ', 'num_word', 'pond', 'position' , 'field_position'
    // ];
    protected $table = "notices_mots_global_index";

    /*
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     
    protected $hidden = [];*/
}