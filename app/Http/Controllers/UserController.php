<?php

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;

use Session;

use Redirect;

use Auth;


class UserController extends Controller
{
    public function userRecipe($id=null)
    {
        $id = Auth::id();
        $ingredients = Ingredient::lists('name', 'id');  
        $recipes = Recipe::where("user_id", "=", $id)->get();
        return view('userRecipe', compact('recipes','ingredients'));
    }
}
