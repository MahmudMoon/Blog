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
		</div>
	</div>

@endsection