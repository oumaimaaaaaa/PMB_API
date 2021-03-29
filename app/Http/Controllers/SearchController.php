<?php

namespace App\Http\Controllers;
use App\Notice;
use App\Search\NoticeSearch;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /*
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        //
    }

    // */

    
    public function filter(Request $request){

       $tab=explode(" ",$request->input("word")); //spliting the phrase that the user is looking for

       $list_notices = DB::table('notices')
        ->leftjoin('notices_mots_global_index','notices.notice_id','=','notices_mots_global_index.id_notice')
        ->rightJoin('words','words.id_word','=','notices_mots_global_index.num_word')
        ->whereIn('words.word',$tab)
        ->get();
         return response()->json($list_notices);

        
         
       
    }

    public function search_parametre(Request $request){
        
        return NoticeSearch::apply($request);
 
         
          
        
     

    
   
}
}