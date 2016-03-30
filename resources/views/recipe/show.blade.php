@extends('layouts.app')
@section('title', 'Show')
@section('content')
    	       <h1>{{$recipe->title}}</h1>
    	    	<table class="table">

    	    		<thead>
    	    			
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
    	    			<th>Azioni</th>
                        <th>Autore</th>
    	    		</thead>
    	    		

					<tbody>
	

		
		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		<td>{{$recipe->description}}<td>
        <td>{{$recipe->user_id}}<td>    
		<td>{!!link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>			

	
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