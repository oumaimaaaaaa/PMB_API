<?php

namespace App\Search;

use App\Notice;
use App\Search\searchParametre\AllNotice;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class NoticeSearch
{
    //searching for the notices based on the parametre that the user choose (by title,by author.....)
    public static function apply(Request $requests){
       
        $query = (new Notice)->newQuery();
        $query = static::RequestToQuery($requests,$query);
          
        return response()->json($query->get()); //printing the result as json forme

    }



     //In this function we simplifying the verification of a existencing parametre  in the request by provading a general forme.
    private static function RequestToQuery(Request $requests,$query) {
              //$query = (new Notice)->newQuery();
             // $result=array();
              $input=$requests->all();
          if($input){
            foreach ($input as $requestName => $value) {
             $classname =
            __NAMESPACE__ . '\\SearchParametre\\' . 
            str_replace(' ', '', ucwords(
            str_replace('_', ' ', $requestName)));
            
            if (class_exists($classname)) {
                $query= $classname::apply($query, $value);
                //array_push($result,$query->get());
               
                
            }
        }
    }
        else {
           $query=AllNotice::apply($requests);
        }
           // echo '<pre>';
           // print_r($result);
           // echo '</pre>';
        return $query;
            }
            
         
            
    
}