<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
     public function search(Request $request){
            
        $stringQuery = $request->input('query');
	    
        $results = array();
	
	    $queries = Category::where('name', 'LIKE', '%'.$stringQuery.'%')->select(['name'])->get();
	
          $queries = $queries->map(function ($item, $key){
            return $item->name;
        });

        return response()->json($queries->toArray());
     }
}
