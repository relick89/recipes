<?php

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;

use Recipes\Http\Requests\CreateRecipeRequest;

use Recipes\Http\Requests\EditRecipeRequest;

use Session;

use Redirect;

use Auth;

use Recipes\User;




class RecipesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create','edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $recipes= Recipe::with('ingredients','user')->orderBy('created_at', 'DESC')->paginate(4);
        
        return view ('recipe.index' , compact('recipes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::lists('name', 'id');

        return view('recipe.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecipeRequest $request)
    {
         if ( ! $request->has('ingredient_list')){
            $recipe->ingredients()->detach();
            return;
        }
        
        $ingredients = array();
        foreach ($request->ingredient_list as $ingId){
            if (substr($ingId, 0, 4) == 'new:'){
                $newIng = Ingredient::create(['name' => substr($ingId, 4)]);
                $ingredients[] = $newIng->id;
                continue;
            }
            $ingredients[] = $ingId;
        } 

        $userid = Auth::user()->id;

        $recipe= Recipe::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id'=>$userid
            ]);
        $recipe->ingredients()->attach($ingredients);
        
   

        return redirect('/recipes')->with('success','Ricetta creata con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredients = Ingredient::lists('name', 'id');  
        $recipe = Recipe::find($id);
        
        return view('recipe.show', compact('recipe','ingredients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredients = Ingredient::lists('name', 'id');  
        $recipe = Recipe::find($id);
        
        return view('recipe.edit', compact('recipe','ingredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRecipeRequest $request, $id)
    {
        
        $recipe = Recipe::find($id);
        
        if ( ! $request->has('ingredient_list')){
            $recipe->ingredients()->detach();
            return;
        }
        
        $ingredients = array();
        foreach ($request->ingredient_list as $ingId){
            if (substr($ingId, 0, 4) == 'new:'){
                $newIng = Ingredient::create(['name' => substr($ingId, 4)]);
                $ingredients[] = $newIng->id;
                continue;
            }
            $ingredients[] = $ingId;
        } 

        $recipe -> title = $request->get('title');
        $recipe -> description = $request->get('description');
        $recipe -> save();
        $recipe->ingredients()->sync($ingredients);

        return redirect('/recipes')->with('success','Ricetta modificata con successo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::destroy($id);
        return redirect('/recipes')->with('success','Ricetta cancellata con successo');
    }
    

    

}
