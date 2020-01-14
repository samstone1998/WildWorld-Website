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

    <!-- start of container -->
    <div class="container col-md-6 mx-auto my-5">

      <div class="col-md-12">
      	<h1 class="display-4" id="post_title">{{ $post_data->post_name }}</h1>
        <p class="" id="created_by">Post created by {{ $post_data->user_created }}</p>
      </div>
      <div class="col-md-12 mt-5">
        {{$post_data->post_content}}
      </div>

    </div>
    <!-- end of container -->


    <!-- start of footer -->
    <footer class="page-footer">

    </footer>
    <!-- end of footer -->


    @include('layouts.main.frameworks')
  </body>
</html>
