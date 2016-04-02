@extends('layouts.app')

@section('title', 'Risultati')

@section('content')

	
	@if($findIngr->isEmpty() == false)
		<h2>Ricette con {{$reqIng}}</h2>
		 <table class="table">
		 	<thead>
		        <th>AUTORE</th>
		        <th>TITOLO</th>
		        <th>INGREDIENTI</th>
		    </thead>
		         @foreach($findIngr as $ingredient)
		         @foreach($ingredient->recipes as $recipe)
		         <tr>	
		         	 <td>{!! $recipe->user->name !!}</td>
		         	 <td>{!! $recipe->title !!}</td>
		         	 <td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		         	 <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            
		 		 </tr>
		 		 @endforeach
		 		 @endforeach		 
		 </table>
	@else
	    <h2>Nessuna ricetta trovata con {{$reqIng}}</h2>
	@endif
@stop

