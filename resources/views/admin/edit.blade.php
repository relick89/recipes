@extends('layouts.master')
@section('title', 'Edit Recipe')
@section('content')
                 
                @include('alerts.request')

                {!!Form::model($recipe, ['route'=>['admin.update', $recipe->id], 'method'=>'PUT'])!!}
                 
             
                <div class ="form-group">
                    {!!Form::label('title: ')!!}
                    {!!Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Insert title'])!!}
                </div>

                <div class ="form-group">
                    {!!Form::label('ingredient_list', 'Ingredients: ')!!}
                    {!!Form::select('ingredient_list[]',$ingredients, null,['class'=>'form-control', 'id' => 'ingredient_list','multiple'])!!}
                </div>

                <div class ="form-group">
                    {!!Form::label('description: ')!!}
                    {!!Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Insert description'])!!}
                </div>
                <div class ="form-group">
                    {!!Form::submit('Edit',['class'=>'btn btn-warning'])!!}    
                    {!!Form::close()!!}                
                </div>
                <div class ="form-group">
                    {!!Form::open(['route'=>['admin.destroyRecipes', $recipe->id], 'method'=>'DELETE'])!!}    
                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
                    {!!Form::close()!!}                
                </div>
@stop
@section('script')
      
            <script type="text/javascript">
                 $('#ingredient_list').select2({
                    placeholder: 'Scegliere o aggiungere gli ingredienti' ,
                    tags: true,
                    tokenSeparators: [",", " "],
                    createTag: function(newIngredient) {
            return {
                id: 'new:' + newIngredient.term,
                text: newIngredient.term + ' (+)'
            };
                   }
                });
            </script>

@stop