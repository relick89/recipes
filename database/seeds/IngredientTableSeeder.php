<?php

use Illuminate\Database\Seeder;
use Recipes\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create(['name' => 'pasta']);
        Ingredient::create(['name' => 'pomodoro']);
        Ingredient::create(['name' => 'aglio']);
        Ingredient::create(['name' => 'basilico']);
        Ingredient::create(['name' => 'sale']);
        Ingredient::create(['name' => 'olio']);
        Ingredient::create(['name' => 'farina']);
        Ingredient::create(['name' => 'lievito']);
        Ingredient::create(['name' => 'acqua']);
        Ingredient::create(['name' => 'merluzzo']);
        Ingredient::create(['name' => 'patate']);
        Ingredient::create(['name' => 'olive']);
        Ingredient::create(['name' => 'pomodorini']);
        Ingredient::create(['name' => 'gelato']);
        Ingredient::create(['name' => 'noci']);
        Ingredient::create(['name' => 'whisky']);
        Ingredient::create(['name' => 'bistecca']);
        Ingredient::create(['name' => 'lattuga']);
        Ingredient::create(['name' => 'arance']); 
        Ingredient::create(['name' => 'mandorle']);   
    }
}