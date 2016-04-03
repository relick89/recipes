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