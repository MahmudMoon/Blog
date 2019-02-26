@extends('main')

	@section('title',' |show post')

	@section('content')

		@if(Session::has('success'))
		  <div class="alert alert-success" role="alert">Success {{Session::get('success')}}</div>
		@endif

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $postdetail->title}}</h1>
			<p class="lead"> {{ $postdetail->body }}</p>
		</div>
		<div class="col-md-4">
			<dl class="dl-horizontal">
			  <dt> Created At : </dt>
			  <dd> {{ date('M j Y : H:i',strtotime( $postdetail->created_at)) }} </dd>
			</dl>
			<dl class="dl-horizontal">
			  <dt> Last Updated At : </dt>
			  <dd> {{ date('M j Y : H:i',strtotime( $postdetail->updated_at))}}</dd>
			</dl>

       <div class="row">

		<div class="col-md-6">
			{!! Html::linkRoute('posts.edit','Edit',array($postdetail->id),array('class'=>'btn btn-success btn-lg btn-block')) !!}
			
		</div>

		<div class="col-md-6">
		    {!! Form::open(['route'=>['posts.destroy',$postdetail->id],'method'=>'DELETE'])!!}
            
            {!! Form::submit('Delete',['class'=>'btn btn-danger btn-lg btn-block']) !!}
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('posts.index')}}" class="btn btn-primary btn-lg btn-block" style="margin-top:10px"> See all Posts </a>
		</div>
	</div>

		</div>
	</div>

	



@endsection