<?php

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;

class IngredientController extends Controller
{
    
	public function find(Request $request)
    {
    	$reqIng = $request->find;
    
    	$findIngr = Ingredient::where('name','like','%'.($reqIng).'%')->get();
		
 	   	return view('find',compact('findIngr', 'reqIng'));    
    }

    

}
