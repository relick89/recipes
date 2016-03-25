<!DOCTYPE html>
<html>
    <head>
        <title>create</title>

        {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}
        {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')!!}
        {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css')!!}

        
    </head>
    <body>
        <div class="container">
            <div class="content">
                
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
                {!!Form::submit('save',['class'=>'btn btn_primary'])!!}    

                {!!Form::close()!!}                
                


            </div>

            

        </div>


        {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')!!}

        {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js')!!}
        
        {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}

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


    </body>
</html>