@extends('layouts.master')
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
                        <td>{!!link_to_route('admin.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>                           
                        <td>{!!Form::open(['route'=>['admin.destroyRecipes', $recipe->id], 'method'=>'DELETE'])!!}    
                                {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
                            {!!Form::close()!!}</td>
					
                    </tbody>
                
                </table>
	
@stop				
	    
