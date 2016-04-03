
@extends('layouts.master')

@section('title', 'showUsers')
							
@section('content')
    	
    	@if (session('success'))
    		<div class="alert alert-success">
    		    {{ session('success') }}
  			</div>
		@endif

    	    	<table class="table">

    	    		<thead>
    	    			<th>Nome</th>
    	    			<th>Email</th>
    	    			<th>Ricette</th>
    	    		</thead>
    	    		
                    @foreach($users as $user)
					<tbody>
	
                		<td>{{$user->name}}</td>
                		<td>{{$user->email}}</td>
                        <td>{!!Form::open(['route'=>['admin.destroy', $user->id], 'method'=>'DELETE'])!!}    
                            {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}    
                            {!!Form::close()!!}</td>     
                        
                    </tbody>
                    @endforeach	
		
@stop	
@section('script')		
        <script type = "text/javascript">
 		  $(function(){
    	  $(".close").click(function(){
         $("#myAlert").alert('close');
      				});
 					  });  
		</script>   
@stop