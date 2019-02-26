@extends('main')
@section('title',' | all posts')
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{route('posts.create')}}" class="btn btn-primary btn-block">Create new posts</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
			   <thead>
			   	 <th>Id</th>
			   	 <th>Title</th>
			   	 <th>Body</th>
			   	 <th>Created At</th>
			   	 <th>
				   	 <a href="#" class="btn btn-primary">View</a>
				   	 <a href="#" class="btn btn-danger">Edit</a>
			   	 </th>

			   </thead>
			   <tbody>
			   	  @foreach($allposts as $posts)
			   	  	<tr>
			   	  		<td>{{$posts->id}}</td>
			   	  		<td>{{$posts->title}}</td>
			   	  		<td>{{ substr($posts->body,0,15).'. . . . . . ' }}</td>
			   	  		<td>{{$posts->created_at}}</td>
			   	  		<th>
						   	 <a href="{{ route('posts.show',$posts->id)}}" class="btn btn-primary">View</a>

						   	 <a href="{{ route('posts.update',$posts->id)}}" class="btn btn-danger">Edit</a>
			   	 		</th>

			   	  	</tr>
			   	  @endforeach
			   </tbody>
			</table>
		</div>			
	</div>
	<div class="row">
		<div class="col-md-12" >
		   <div class="text-center">
			
		   </div>
		</div>
	</div>


	
	
@endsection
