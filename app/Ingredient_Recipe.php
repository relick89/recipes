<?php

namespace Recipes;

use Illuminate\Database\Eloquent\Model;

class Ingredient_Recipe extends Model
{
    

    protected $fillable = ['ingredient_id','recipe_id'];

}
