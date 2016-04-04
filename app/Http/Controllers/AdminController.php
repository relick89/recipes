<?php

namespace Recipes\Http\Controllers;

use Illuminate\Http\Request;

use Recipes\Http\Requests;

use Recipes\Recipe;

use Recipes\Ingredient;

use Recipes\User;

use Hash;

use Auth;

use Recipes\Http\Requests\CreateUserRequest;

use Illuminate\Support\Facades\Input as input;

use Recipes\Http\Requests\EditRecipeRequest;

class AdminController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
    $this->middleware('isadmin');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes= Recipe::with('ingredients','user')->orderBy('created_at', 'DESC')->paginate(4);
        
        return view ('admin.showRecipes' , compact('recipes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User;

        $user -> name = $request->get('name');
        $user -> email = $request->get('email');
        $user -> password = Hash::make(Input::get('password'));
        $user -> isAdmin = $request->get('isAdmin');
        $user -> save();
        return redirect('/admin/showUsers')->with('success','Utente creato con successo');;
    }

    public function showUsers()
    {
        $users= User::all();
        
        return view ('admin.showUsers', compact('users'));
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
        
        return view('admin.show', compact('recipe','ingredients'));
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
        
        return view('admin.edit', compact('recipe','ingredients'));
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
        $recipe -> ingredients()->sync($ingredients);

        return redirect('/admin')->with('success','Ricetta modificata con successo');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        if(!$user->recipes->isEmpty())
        {
            foreach($user->recipes as $recipe)
            {
                Recipe::destroy($recipe->id);
            }
        }
        User::destroy($id);
        return redirect('/admin/showUsers')->with('success','Utente cancellato con successo');;
    }

    public function destroyRecipes($id)
    {
        Recipe::destroy($id);
            
        return redirect('/admin')->with('success','Ricetta cancellata con successo');;
    }


    public function showIngredients()
    {
        $ingredients= Ingredient::all();
        
        return view ('admin.showIngredients', compact('ingredients'));
    }

    public function destroyIngredient($id)
    {
        Ingredient::destroy($id);
            
        return redirect('/admin/showIngredients')->with('success','Ingrediente cancellato con successo');;
    }

        
}
