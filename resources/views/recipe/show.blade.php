<!DOCTYPE html>
<html>
    <head>
        <title>index</title>

        {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}
        {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')!!}
 		{!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}	      
    </head>

    <body>
							

		<div class="container">
			
    	    <div class="content">
    	       <h1>{{$recipe->title}}</h1>
    	    	<table class="table">

    	    		<thead>
    	    			
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
    	    			<th>Azioni</th>
    	    		</thead>
    	    		

					<tbody>
	

		
		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		<td>{{$recipe->description}}<td>
		<td>{!!link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>			

	
					</tbody>
	
				
	    
				 						
			</div>
		</div>		
		{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')!!}

        {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}

        <script type = "text/javascript">
 		  $(function(){
    	  $(".close").click(function(){
         $("#myAlert").alert('close');
      				});
 					  });  
		</script>   

	</body>
			
</html>