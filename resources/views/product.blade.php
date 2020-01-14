<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('layouts.main.mainhead')
    <title>Book a trip at WildWorlds!</title>
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
        <h1 class="display-3 pt-5 text-white">Book your trip today!</h1>
        <p class="lead pt-1 display-5 font-weight-bold">Prices as cheap as £60 per day!</p>
        <a class="btn btn-success btn-lg text-white" href="#get-quote-header">Get a quote now</a>
      </div>
    </header>
  <!-- end of header image -->

    <!-- start of container -->

    <div class="container row mx-auto py-5">

      <div class="col-md-9">
        <h1 class="display-5 mt-3" id="get-quote-header">Start your quote today</h1>
        <p class="mt-3">Fill out the form below to book your adventure at WildWorlds. Having issues? Need to speak to a member of WildWorlds? Email us at support@wildworlds.co.uk</p>
      </div>

      <!-- start of quote form -->
      <div class="mt-3 col-md-12 row">
        <form class="col-md-10">

          <div class="col-md-10 pr-5 row" id="person-details">
            <div class="col-md-6">
              <label for="full-name" class="mt-3">Full name</label><input type="text" name="full-name" id="full-name" class="quote-form form-control form-inp" placeholder="Full name" required>
              <label for="emailaddress" class="mt-3">Email</label><input type="email" name="emailaddress" id="emailaddress" class="quote-form form-control form-inp" placeholder="Email address" required>
            </div>

            <div class="col-md-6">
              <label for="homeaddress" class="mt-3">Address</label><input type="text" name="homeaddress" id="homeaddress" class="quote-form form-control form-inp" placeholder="Home address"  required>
              <label for="phone-number" class="mt-3">Phone number</label><input type="text" name="phone-number" id="phone-number" class="quote-form form-control form-inp" placeholder="Phone number"  required>
            </div>
          </div>

          <div class="col-md-12 row " id="stay-dates">
              <div class="col-md-3">
                <label for="start-date" class="mt-3">Start date</label>
                <input type="date" name="start-date" id="start-date" max="3000-12-31" min="1000-01-01" class="form-control text-center form-inp" required>
              </div>
              <div class="col-md-3">
                <label for="end-date" class="mt-3">End date</label>
                <input type="date" name="end-date" id="end-date" min="1000-01-01" max="3000-12-31" class="form-control text-center form-inp" requied>
              </div>

          </div>

          <div class="col-md-6 column p-0">
            <div class="col-md-10">
              <P class="mt-3">Would you like your own surival trainer?</P>
            </div>

            <div class="col-md-6">
              <div class="btn-group btn-group-toggle pl-4" data-toggle="buttons">
                <label class="btn btn-outline-success trainer-btn mx-3 py-1 px-4">
                  <input type="radio" name="need-trainer" id="trainer-yes">Yes
                </label>
                <label class="btn btn-outline-success trainer-btn mx-3 py-1 px-4">
                  <input type="radio" name="need-trainer" id="trainer-no">No
                </label>
              </div>

            </div>
        </div>

          <button type="submit" class="btn-success mx-auto mt-4 py-1 px-5">Submit</button>

        </form>
      </div>
      <!-- end of quote form -->

      <!-- information content -->
      <div class="col-md-9 row content mt-5">
        <div class="col-md-8 mt-3" id="items-needed">
          <h2 class="">What items will I need</h2>
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


        <div class="col-md-8 mt-3" id="rules">
          <h2 class="">What are the rules?</h2>
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
