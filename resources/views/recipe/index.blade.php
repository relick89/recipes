
@extends('layouts.app')

@section('title', 'home')
							
@section('content')
    	
    	@if (session('success'))
    		<div class="alert alert-success">
    		    {{ session('success') }}
  			</div>
		@endif

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
		<td>{{$recipe->description}}<td>
        <td>{{$recipe->users}}<td>     
        <td>{!!link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info'])!!}</td>            
	
					</tbody>
@endforeach	
	
    @foreach($users as $user)
        <td>{{$user->name}}<td>  
    @endforeach 			
	    
@stop	
@section('script')		
        <script type = "text/javascript">
 		  $(function(){
    	  $(".close").click(function(){
         $("#myAlert").alert('close');
      				});
 					  });  
		</script>   
@stop
	
