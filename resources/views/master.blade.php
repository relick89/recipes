<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}
        {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css')!!}
        {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')!!}
    </head>
    <body>
        <div class="container">
             @yield('content')   
        </div>


        {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')!!}
        {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}
        {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js')!!}

        <div class="footer">
            @yield('script')
        </div>
    </body>
</html>
