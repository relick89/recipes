@extends('layouts.app')
@section('title', 'UserRecipes')
@section('content')
@include('alerts.success')
               <h1>Le ricette di {{ Auth::user()->name }} </h1>

    	    	<table class="table">

    	    		<thead>
    	    			<th>Titolo</th>
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
                        <th></th>
    	    		</thead>
    	    		
@foreach($recipes as $recipe)
					<tbody>
	

		<td>{{$recipe->title}}</td>
		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		<td>{{$recipe->description}}<td>
        <td>{!!link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>            
        <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            
       
		  
	
					</tbody>
@endforeach	
				
@stop	    
