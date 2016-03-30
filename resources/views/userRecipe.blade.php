<!DOCTYPE html>
<html>
<head>
</head>
<body>
                <h1>Ricette</h1>

    	    	<table class="table">

    	    		<thead>
    	    			<th>Titolo</th>
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
    	    			<th>Azioni</th>
                        <th>Azioni</th>
    	    		</thead>
    	    		
@foreach($recipes as $recipe)
					<tbody>
	

		<td>{{$recipe->title}}</td>
		<td>{{$recipe->ingredients()->get()->implode('name',', ')}}</td>
		<td>{{$recipe->description}}<td>
        <td>{{$recipe->user_id}}<td>    
		  
	
					</tbody>
@endforeach	
				
	    
</body>

</html>