<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

    <title>Control Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('controlPanelProva.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="{{ asset('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">

  </head>

  <body>

  <div class="nav-side-menu">
      <div class="list-group-item brand">Brand Logo</div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

      <div class="menu-list">

          <ul id="menu-content" class="menu-content collapse out">
              <li>
                  <a href="#">
                      <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
              </li>

              <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
              </li>
              <ul class="sub-menu collapse" id="products">
                  <li class="active"><a href="#">CSS3 Animation</a></li>
                  <li><a href="#">General</a></li>
                  <li><a href="#">Buttons</a></li>
                  <li><a href="#">Tabs & Accordions</a></li>
                  <li><a href="#">Typography</a></li>
                  <li><a href="#">FontAwesome</a></li>
                  <li><a href="#">Slider</a></li>
                  <li><a href="#">Panels</a></li>
                  <li><a href="#">Widgets</a></li>
                  <li><a href="#">Bootstrap Model</a></li>
              </ul>


              <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
              </li>
              <ul class="sub-menu collapse" id="service">
                  <li>New Service 1</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
              </ul>


              <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
              </li>
              <ul class="sub-menu collapse" id="new">
                  <li>New New 1</li>
                  <li>New New 2</li>
                  <li>New New 3</li>
              </ul>


              <li>
                  <a href="#">
                      <i class="fa fa-user fa-lg"></i> Profile
                  </a>
              </li>

              <li>
                  <a href="#">
                      <i class="fa fa-users fa-lg"></i> Users
                  </a>
              </li>
          </ul>
      </div>
  </div>
  </body>
</html>