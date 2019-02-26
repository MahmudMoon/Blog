@extends('main')
	@section('title',' | create post')
	@section('content')
	 <div class="row">
	 	<div class="col-md-12 col-md-offset-2">
	 		<h1>
	 			Create your post
	 		</h1>
	 		<hr>
	 		{!! Form::open(['route' => 'posts.store']) !!}
	 		  {{ Form::label('title', 'Title: ')}}
	 		  {{ Form::text('title',null,array('class'=>'form-control'))}}

	 		  {{Form::label('body','Body : ')}}
	 		  {{Form::textarea('body',null,array('class'=>'form-control'))}}

	 		   {{Form::submit('Share Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
            {!! Form::close() !!}

	 	</div>

	 	@if(count($errors)>0)
  @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
  @endforeach
@endif
	 </div>
	@endsection