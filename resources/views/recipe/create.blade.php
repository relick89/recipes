@extends('layouts.app')

@section('title', 'Add Recipe')

@section('content')
                
@include('alerts.request')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Recipe</div>
                <div class="panel-body col-md-10 col-md-offset-1">

                    {!!Form::open(['route'=>'recipes.store', 'method'=>'POST'])!!}
                   
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
                        {!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Insert description'])!!}
                    </div>
                    {!!Form::submit('save',['class'=>'btn btn-primary'])!!}    

                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
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