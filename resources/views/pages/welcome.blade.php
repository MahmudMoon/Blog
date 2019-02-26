 @extends('main')

  @section('title','| Home')

  @section('stylesheet')
   <link rel="stylesheet" type="text/css" href="style.css">
  @endsection

  @section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
       <h1 class="display-4">About My Blog</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for    calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
       </div>
    </div>
  </div>  <!--first row end -->
  
  <div class="row">
    <div class="col-md-9">
      <div class="post">
        @foreach($posts as $post)
          <h1>{{ $post->title }}</h1>
          <p> {{ strlen($post->body)>300?substr($post->body, 0,300).'. . . ':$post->body }}</p>
          <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Read More</a>
           <hr>
        @endforeach
        
        {{ $posts->links() }}
       
      </div>
    </div>
    <div class="col-md-3">
      <h1>Side Bar</h1>
    </div>
  </div>
  @endsection

