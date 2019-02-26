<!doctype html>
<html lang="en">

 @include('_head')

  <body>

	 @include('_nav')

	 <div class="container">
  		 @yield('content')
     </div>

	 @include('_footer')

	 @include('javascript')

	 @yield('js')
    
  </body>
</html>
