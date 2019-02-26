<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/')?"active":""}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('about')?"active":""}}">
        <a class="nav-link" href="{{ route('posts.index')}}">
          @if(Auth::user()->admins == 1)
              <p class="float-left" style="margin-right: 10px;">All Posts</p>
          @else
             <p class="float-left" style="margin-right: 10px;">My Posts</p>
          @endif
        </a>
      </li>
      <li  class="nav-item {{Request::is('contact')?"active":""}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
   <p class="float-left" style="margin-right: 10px">{{ Auth::user()->name }}</p>
   @if(Auth::user()->admins == 1)
      <p class="float-left" style="margin-right: 10px;color:red;">Admin</p>
   @endif

   <a href="{{ route('logout')}}" class="btn btn-danger float-left">Logout</a>
</nav>