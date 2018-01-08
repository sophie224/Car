<!DOCTYPE html>
<html lang="en">
<head>
  <title>AUTO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <link rel="icon" href="./image/logo-red.png" type="image/png">

</head>
<body>

<div class="container-fluid" id="home">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <logo id="logo">
      </logo>
        <button id="showhideMenu" type="button" class="showMenu"></button>
          <nav id="menu" class="collapse">
            <div class="center-ul">
              <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
            </div>
          </nav>

          <!-- Wrapper for slides -->
          @include('carousel')
      
          <!-- Left and right controls -->
          <button href="#myCarousel" role="button" data-slide="prev" class="myclass-slider-left">
            <div class="myclass-slider-leftArrow">
              <img src="image/arrowleft.png" alt="Slide Left"/>
            </div>
          </button>

          <button href="#myCarousel" role="button" data-slide="next" class="myclass-slider-right">
            <div class="myclass-slider-rightArrow">
              <img src="image/arrowright.png" alt="Slide Right"/>
            </div>
          </button>

  </div>
</div>
        <!-- services-->
        @include('services')

          <div class="peacecar container-fluid">
            <car></car>
          </div>

        <!--contact-->
        <footer class="container" id="contact">

          <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1362824355547!2d44.7828302155053!3d41.71757797923524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1514712742391"
            width="100%" height="650" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
          </div>

        @include('contact')

        </footer>

    
<script src="{{ asset('/js/showhideMenu.js') }}"></script>
<script src="{{ asset('/js/smoothScroll.js') }}"></script>

</body>
</html>
