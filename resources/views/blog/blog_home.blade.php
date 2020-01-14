<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('layouts.main.mainhead')
    <title>WildWorlds blog</title>
  </head>
  <body>

    <!-- start of nav bar -->

    @include('layouts.main.pagenav')

    <!-- end of nav bar -->


  <!-- start of header image -->
    <header class="header-image">
      <div class="col-md-6 mx-auto nav-div">
      </div>
      <div class="col-sm-10 col-md-6 col-lg-6 pt-3 mx-auto text-center text-white header-image-text">
        <h1 class="display-3 pt-5 text-white">Welcome to our blog</h1>
        <p class="lead pt-1 display-5 font-weight-bold">A place to learn about survival, have fun and become one with nature.</p>
      </div>
    </header>
  <!-- end of header image -->

    <!-- start of container -->
    <div class="container col-md-6 mx-auto my-5">

      @foreach ($posts as $post)
      <div class="article-intro p-2">
	<h1 class="display-4" id="post_title"><a href="/blog/post/{{ $post->id}}">{{ $post->post_name }}</a></h1>
	<p class="" id="post_intro">{{ $post->post_intro }}</p>
	<p class="" id="created_by">Post created by {{ $post->user_created }}</p>
	<hr>
      </div>
      @endforeach

    </div>
    <!-- end of container -->


    <!-- start of footer -->
    <footer class="page-footer">

    </footer>
    <!-- end of footer -->


    @include('layouts.main.frameworks')
  </body>
</html>
