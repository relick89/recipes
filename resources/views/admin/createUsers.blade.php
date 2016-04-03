@extends('layouts.master')

@section('title', 'createUsers')
							
@section('content')
    	
@include('alerts.request')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new User</div>
                <div class="panel-body col-md-10 col-md-offset-1">
                   
                {!!Form::open(['route'=>'admin.store', 'method'=>'POST'])!!}

                <div class ="form-group">
                    {!!Form::label('name: ')!!}
                    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Insert name'])!!}
                </div>

                <div class ="form-group">
                    {!!Form::label('email: ')!!}
                    {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Insert email'])!!}
                </div>

                <div class ="form-group">
                    {!!Form::label('password: ')!!}
                    {!!Form::text('password',null,['class'=>'form-control', 'placeholder'=>'Insert password'])!!}
                </div>
                
                <div class ="form-group">
                    {!!Form::label('is Admin?? ')!!}
                    <div class ="radio-inline">
                        <label>{!!Form::radio('isAdmin','1') !!}yes</label>
                    </div>
                     <div class ="radio-inline">
                        <label>{!!Form::radio('isAdmin','0', true) !!}no</label>
                    </div>
                </div>
                

                {!!Form::submit('save',['class'=>'btn btn-primary'])!!}    

                {!!Form::close()!!}  
                
                </div>
            </div>
        </div>
    </div>
</div>   
		  
@stop