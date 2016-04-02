@extends('layouts.app')
@section('title', 'Show')
@section('content')
    	       <h1>{{$recipe->title}}</h1>
    	    	<table class="table">

    	    		<thead>
    	    			
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
                        <th>Autore</th>
                        <th></th>
    	    		</thead>
    	    		

					<tbody>
	

		
		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		<td>{{$recipe->description}}</td>
        <td>{{$recipe->user->name}}</td>
        @if(Auth::user()->id == $recipe->user_id )    
		<td>{!!link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>			
        <td>{!!Form::open(['route'=>['recipes.destroy', $recipe->id], 'method'=>'DELETE'])!!}
            {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
            {!!Form::close()!!} 
        </td>
        @endif
	
					</tbody>
	
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