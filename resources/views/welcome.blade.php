@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Per visitare il sito <a href="{{ url('/recipes') }}">clicca qui</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
