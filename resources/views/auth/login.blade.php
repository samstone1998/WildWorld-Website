<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page</title>
  </head>
  <body>
    <div id="form-container" class="col-sm-12 col-md-7 col-lg-5 mx-auto mt-3 py-4  bg-light">
	<h2 class="text-center pb-4">Admin Panel</h2>
	<form method="POST" action="{{route('login')}}">
      	@csrf
          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                                </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                      <label class="form-check-label" for="remember">
                          Remember Me
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-success">
                      Login
                  </button>
              </div>
          </div>
      </form>
    </div>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  </body>
</html>
