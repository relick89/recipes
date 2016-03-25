<?php

namespace Recipes;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ["name"];

    public function recipes()
    {
    	return $this->belongsToMany('Recipes\Recipe', 'ingredient_recipe','ingredient_id', 'recipe_id')->withTimestamps();
    }
}
