<?php

use Illuminate\Database\Seeder;
use Recipes\Ingredient_Recipe;

class Ingredient_RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=6; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 1,
        	            'ingredient_id' => $i 
            ]);
        }
        
        for($i = 5; $i<=9; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 2,
                        'ingredient_id' => $i 
            ]);
        }

        for($i = 10; $i<=13; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 3,
                        'ingredient_id' => $i 
            ]);
        }

        for($i = 3; $i<=6; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 3,
                        'ingredient_id' => $i 
            ]);
        }

        for($i = 14; $i<=16; $i++){
            DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 4,
                        'ingredient_id' => $i 
            ]);
        }

        DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 5,
                        'ingredient_id' => 17 
        ]);

        for($i = 5; $i<=6; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                        'recipe_id' => 5,
	                        'ingredient_id' => $i 
            ]);
    	}

    	for($i = 5; $i<=6; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                        'recipe_id' => 6,
	                        'ingredient_id' => $i 
            ]);
    	}

    	for($i = 18; $i<=20; $i++){
	        DB::table('ingredient_recipe')->insert([ 
	                        'recipe_id' => 6,
	                        'ingredient_id' => $i 
            ]);   
    	}

    	DB::table('ingredient_recipe')->insert([ 
                        'recipe_id' => 6,
                        'ingredient_id' => 15 
        ]);
    }
}
