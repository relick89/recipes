@extends('layouts.app')
@section('title', 'Add Recipe')
@section('content')
                
                @include('alerts.request')

                {!!Form::open(['route'=>'recipes.store', 'method'=>'POST'])!!}
              <!!  input type="hidden" name="_token" value="{!! csrf_token() !!}" !!> 
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