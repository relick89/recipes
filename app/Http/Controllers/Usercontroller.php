<?php

namespace Recipes\Http\Controllers;

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;

use Session;

use Redirect;

use Auth;


class Usercontroller extends Controller
{
    public function userRecipe($id=null)
    {
        $id = Auth::id();
        $ingredients = Ingredient::lists('name', 'id');  
        $recipes = Recipe::find($id);
        return view('userRecipe', compact('recipes','ingredients'));
    }
}
