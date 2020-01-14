<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('layouts.main.mainhead')
    <title>WildWorlds Home</title>
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
        <h1 class="display-3 pt-5 text-white">Welcome to <span class="logo">WildWorld</span>!</h1>
        <p class="lead pt-1 display-5 font-weight-bold">A place to learn about survival, have fun and become one with nature.</p>
        <a class="btn btn-success btn-lg text-white" href="/product">Book a trip</a>
      </div>
    </header>
  <!-- end of header image -->

    <!-- start of container -->
    <div class="container row mx-auto py-5">

      <!-- start of main body content -->
      <div class="content col-sm-12 col-md-9">
        <div class="col-md-11" id="what-we-do">
          <h2 class="">What we do</h2>
          <p class="">Ever feel like your family is stuck indoors too much? Want to teach them the way of nature? or do you have a passion for wild camping? At WildWorlds we have 20 miles full of open land for you and your family to explore.</p>
          <p class="">We allow you to camp in the middle of our 10 miles of land for as long as you wish. Letting you survive of the land and be one with nature. We also can provide expert lessons to give you our top secrets in wild camp survival.</p>
        </div>


        <div class="col-md-11 mt-5" id=how-it-works>
          <h2 class="">How it works</h2>
          <p class="">Before you go into the wild, You will be given a map as well as a safety buzzer. From here you are free to explore and go as deep into the land as you wish using any resources in your disposal to keep you going.</p>
          <p class="">Your map will tell you where you can find certain resources on the land as well as some interesting spots. However the map is optional and you may choose not to be given one if you are a seasoned wild camper!</p>
          <P class="">If you are exploring with an instructure he will take you around the land showing you how to use your tools and resources. He will also teach you some basic camping skills like fire making, water filtering and how to choose the best location for every weather condition.</p>
          <P class"">Your safety buzzer will allow us to communicate with you and must be worn on you at all times. It can be used incase you are in need of urgent help like an injury or incase you are lost. Any participants seen without there safety buzzer will be terminated from the land.</p>
        </div>


        <div class="col-md-11 mt-5" id="items-needed">
          <h2 class="">Items needed</h2>
          <p class="">There is no strict list of items you must have, however we do recommend you have atleast the basics. Here are the essentials we recommend:</p>
          <ul class="">
            <li>Sharp knife or machete</li>
            <li>An axe or saw</li>
            <li>Shelter like a tarp or a tent</li>
            <li>Items for cooking and eating</li>
            <li>Container/bottles for storing water</li>
            <li>A light source</li>
            <li>first aid/medical kit</li>
          </ul>
          <p class="">The less items you take the harder your stay will be. Feel free to take less items then you expect you need to give yourself a challenge!</p>
        </div>


        <div class="col-md-11 mt-5" id="rules">
          <h2 class="">Camping rules</h2>
          <p class="">We are very open with our rules, However for everyones safety its important they are followed. Here are a list of our rules:</p>
          <ul>
            <li>Always keep your safety buzzer on your person</li>
            <li>Don't leave rubbish or debree on the land</li>
            <li>Be respectful and mindful of others to not hurt there feelings or put them in danger</li>
            <li>If told to come back to the entrance by a staff member please do so as fast as possible</li>
            <li>Keep fires under control. No making massive fires just for fun</li>
          </ul>
          <p>Failure to follow any of these rules will result in a life time ban in WildWorlds.</p>
        </div>
      </div>
      <!-- end of main body content -->

      <!-- blog post content -->
      <div class="blog-post-section col-md-3 pl-2 border-left">
        <h2 class="display-5 text-center mb-4">Our latest posts</h2>

	@foreach ($blog_posts as $post)
	<div class="blog-post my-1 pb-2">
          <h5 class="mt-2 px-1 text-center">{{ $post->post_name }}</h5>
          <p class="px-2">{{ $post->post_intro }}</p>
	  <center><a class="btn btn-success text-white" href="/blog/post/{{ $post->id}}">Read more</a></center>
	  <hr>
	</div>
	@endforeach
      <!-- end of blog post content -->

    </div>
    <!-- end of container -->


    <!-- start of footer -->
    <footer class="page-footer">

    </footer>
    <!-- end of footer -->



    @include('layouts.main.frameworks')
  </body>
</html>
