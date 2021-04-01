<?php

namespace App\Http\Controllers;
use App\Notice;
use App\Search\NoticeSearch;
use App\Http\Requests;
use Illuminate\Http\Request;


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

    
    

    public function search_parametre(Request $request){
     
        return NoticeSearch::apply($request);
 
         
          
        
     

    
   
}
}