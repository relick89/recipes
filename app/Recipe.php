<?php

namespace Recipes;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = "recipes";

    protected $fillable = ['title', 'description'];

    public function ingredients()
    {
    	return $this->belongsToMany('Recipes\Ingredient', 'ingredient_recipe', 'ingredient_id', 'recipe_id');
    }

 
}
