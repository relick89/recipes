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
                    <label class="col-md-8 control-label">Name</label>
                    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Insert name'])!!}
                </div>

                <div class ="form-group">
                    <label class="col-md-8 control-label">Email</label>
                    {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Insert email'])!!}
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-8 control-label">Password</label>

                            <div>
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-8 control-label">Confirm Password</label>

                            <div>
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                <div class ="form-group">
                    <label class="col-md-4 control-label">Is admin?</label>
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