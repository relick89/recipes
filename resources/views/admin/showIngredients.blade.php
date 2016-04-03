@extends('layouts.master')

@section('title', 'showIngredients')
							
@section('content')
    	
    	@if (session('success'))
    		<div class="alert alert-success">
    		    {{ session('success') }}
  			</div>
		@endif
		<div class="col-md-4 col-md-offset-4">
			<table class="table">
				<thead>
				    	<th>Ingredienti</th>
				    	<th></th>
				</thead>
				    	    		
				@foreach($ingredients as $ingredient)
				<tbody>
				    <td>{{$ingredient->name}}</td>
				    <td>{!!Form::open(['route'=>['admin.destroyIngredient', $ingredient->id], 'method'=>'DELETE'])!!}    
		                {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
		                {!!Form::close()!!}</td>
				</tbody>
				@endforeach	
			</table>
			
		</div>
		
@stop	