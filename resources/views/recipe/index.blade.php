
@extends('layouts.app')

@section('title', 'home')
							
@section('content')
    	
    	@include('alerts.success')

    	<table class="table">

    		<thead>
    			<th>Titolo</th>
    			<th>Ingredienti</th>
    			<th>Descrizione</th>
                <th>Autore</th>
    			<th></th>
    		</thead>
    		
            @foreach($recipes as $recipe)
			<tbody>
	
        		<td>{{$recipe->title}}</td>
        		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
        		<td>{{substr($recipe->description,0,200)}}...</td>
                <td>{{$recipe->user->name}}</td>     
                <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            
            
            </tbody>
            @endforeach	
        </table>
        <center>{!!$recipes->render()!!}</center>		
	    
@stop	

	
