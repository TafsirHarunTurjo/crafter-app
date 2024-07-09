<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crafter</title>

  <link rel="stylesheet" href="{{asset('website\css\animate.css')}}">


  <link rel="stylesheet" href="{{asset('website\css\bootstrap.min.css')}}">


  <link rel="stylesheet" href="{{asset('website\css\style.css')}}">



</head>

<body>






<div class="container-fluid">
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent  py-4 sticky-top">
        <!-- <div class="container-fluid"> -->
          <a class="navbar-brand" href="#"><img class="img-fluid" style="width: 150px"  src="{{ asset('website/images/logo-inverse-303x84.png') }}" alt="" srcset="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars barsicons"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto my-3 my-lg-0 main-menu fw-bolder">
                <li class="nav-item dropdown active ">
                  <a class="nav-link dropdown-toggle text-center text-md-left" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    HOME
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">HOME 1</a>
                    <a class="dropdown-item" href="#">HOME 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle text-center text-md-left" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    PAGES
                  </a>
                  <div class="dropdown-menu">
                    <div class="row ">
                      <div class="col-3">
                        <a class="dropdown-item" href="#">Page 1</a>
                        <a class="dropdown-item" href="#">Page 2</a>
                      </div>
                      <div class="col-3">
                        <a class="dropdown-item" href="#">Page 3</a>
                        <a class="dropdown-item" href="#">Page 4</a>
                      </div>
                      <div class="col-3">
                        <a class="dropdown-item" href="#">Page 5</a>
                        <a class="dropdown-item" href="#">Page 6</a>
                      </div>
                  </div>


                </li>
                <li class="nav-item active">
                  <a class="nav-link text-center text-md-left" href="#">PRICING</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-center text-md-left" href="#">SPEAKERS</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-center text-md-left" href="#">SPONSORS</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-center text-md-left" href="#">CONTACTS</a>
                </li>
                <li class="text-center text-md-left">
                  <button type="button" class="btn btn-buytickets fw-bold">BUY TICKETS</button>
                </li>
              </ul>
          </div>
        <!-- </div> -->
      </nav>

      <section id="banner">
        <div class="banner-container">
          <div class="banner-contents px-5 pt-5 text-white">
            <p class="font-weight-bold"><i class="fa-solid fa-location-dot location-icon pe-2"></i>DECEMBER 16-20 2026,LOS ANGELES, CA</p>
            <h1 class="font-100 ">WEB DESIGN CONFERENCE 2026</h1>
          </div>
        </div>
      </section>


      <div class="launch-time d-flex justify-content-around pb-5">
        <div>
          <p id="days" class="font-100 text-days">00</p>
          <span class="font-20px">DAYS</span>
        </div>
        <div>
          <p id="hours" class="font-100 text-hours">00</p>
          <span  class="font-20px">HOURS</span>
        </div>
        <div>
          <p id="minutes" class="font-100 text-minutes">00</p>
          <span  class="font-20px">MINUTES</span>
        </div>
        <div>
          <p id="seconds" class="font-100 text-seconds">00</p>
          <span  class="font-20px">SECONDS</span>
        </div>
      </div>
    </div>
  </header>




  <main>
    @yield('content')
  </main>




  <footer class="footer-section bg-dark text-white py-5 mt-5">
    <div class="container d-flex">
      <div class="col-md-4"><div class="wow slideInLeft">
        <div class="row row-30">
          <div class="col-12 py-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="{{ asset('website/images/logo-inverse-303x84.png') }}" alt="" width="151" height="42"/></a>
          </div>
          <div class="col-12">
            <p class="py-5">Evenly is an annual web design & development event gathering widely known industry experts from all over the world. Take a part in our conference and extend your IT knowledge today!</p>
            <div class="footer-divider"></div>
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Eventy</span><span>. All Rights Reserved.</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="wow slideInRight">
          <div class="row row-50">
            <div class="col-12 py-4">
              <h4 class="footer-title mb-5">Subscribe & Stay Updated</h4>
              <!-- RD Mailfrom-->
              <form action="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="E-mail" aria-label="Recipient's emaiil" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary myButton ms-1" type="button" id="button-addon2">SUBSCRIBE</button>
                </div>
              </form>




            </div>

            <div class="col-md-6">
              <h4 class="footer-title">Date and Location</h4>
              <ul class="list-contact-info">
                <li>
                  <span class=""></span>
                  <span class="list-item-text">
                    <a href="#">
                      <span class="text-secondary">July 05-09, 2026</span><br>
                      51 Francis Street, Darlinghurst NSW 2011, United States
                    </a>
                  </span>
                </li>
                <li>
                  <span class="icon mdi mdi-phone icon-md icon-secondary"></span>
                  <span class="list-item-text">
                    <a href="tel:#">Call: +880 1799643911</a>
                  </span>
                </li>
              </ul>
            </div>


            <div class="col-md-6">
              <h4 class="footer-title">Get Social</h4>
              <p class="big">Follow us to stay connected and receive instant updates.</p>
              <ul class="social-list fa-ul ms-auto mb-2 mb-lg-0 p-4 d-flex justify-content-center">
                <li class="fu-items "><a href="http://"><i class="fa-brands fa-google p-3 m-1"></i></a></li>
              <li class="fu-items"><a href="http://"><i class="fa-brands fa-instagram p-3 m-1"></i></a></li>
              <li class="fu-items"><a href="http://"><i class="fa-brands fa-facebook-f p-3 m-1"></i></a></li>
              <li class="fu-items"><a href="http://"><i class="fa-brands fa-x-twitter p-3 m-1"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



</div>









<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>













  <!-- imported js are here such as wow, all min, owl and custom js -->

  <script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website/js/jquery.min.js')}}"></script>
  <script src="{{ asset('website/js/wow.min.js') }}"></script>
  <script src="{{ asset('website/js/all.min.js') }}"></script>
  <script src="{{ asset('website/js/custom.js') }}"></script>
  <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>




    <!-- countdown here -->
     <script>
      var countDownDate = new Date("Dec 16, 2026 00:00:00").getTime();
      var x = setInterval(function(){
        var now = new Date().getTime();
        var distance = countDownDate-now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";
      }
      },1000)
     </script>





</body>

</html>
