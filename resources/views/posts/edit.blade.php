@extends('main')
@section('title','| edit post')

@section('content')
  
<div class="row">
					<div class="col-md-8">
					 {!! Form::model($postdetail,array('route'=>['posts.update',$postdetail->id],'method'=>'PUT')) !!}
					     {{ Form::label('title','Title: ') }}
					    {{ Form::text('title',null,array('class'=>'form-control'))}}
					    {{ Form::label('body','Body: ') }}
 						 {{ Form::textarea('body',null,array('class'=>'form-control'))}}
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
						    {{Form::submit('save changes' ,['class'=>'btn btn-success btn-lg btn-block'])}}	
						</div>

						<div class="col-md-6">
				            {!! Html::linkRoute('posts.show','cancle',array($postdetail->id),array('class'=>'btn btn-danger btn-lg btn-block'))!!}
				</div>
						
			</div>
			{!! Form::close() !!}

		</div>

	
	</div>
	

@endsection