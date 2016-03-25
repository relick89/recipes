<?php

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;





class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = \Recipes\Ingredient::lists('name', 'id');

        return view('recipe.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ( ! $request->has('ingredient_list')){
            $recipe->ingredients()->detach();
            return;
        }
        
        $ingredients = array();
        foreach ($request->ingredient_list as $ingId){
            if (substr($ingId, 0, 4) == 'new:'){
                $newIng = \Recipes\Ingredient::create(['name' => substr($ingId, 4)]);
                $ingredients[] = $newIng->id;
                continue;
            }
            $ingredients[] = $ingId;
        } 


        $recipe= \Recipes\Recipe::create([
            'title' => $request['title'],
            'description' => $request['description'],

            ]);
        $recipe->ingredients()->attach($ingredients);
        


    /*    foreach ($request -> ingredient as $ingr) {
    
        $ingrId= \Recipes\Ingredient::where('ingredient', '=',$ingr['ingredient'])->first();
        $pivotTb= \Recipes\Ingredient_Recipe::create([
            'recipe_id'=>$recipe->id,'ingredient_id'=>$ingrId->id
             ]);
    
        }
    */    
        return "Ricetta inserita";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
