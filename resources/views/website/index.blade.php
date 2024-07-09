@extends('layouts.website')
@section('content')

<section class="py-5">
      <div class="container">
        <div class="row text-center">
          <div class=" wow slideInLeft col-md-4 icon-hover-hero ">
            <span><i class="fa-regular fa-lightbulb lightbulb-icon py-4"></i></span>
            <h1 class="icon-text-20px mt-3">Strong Community</h1>
            <p class="icon-text-15px">Our event unites a friendly and supportive community of web designers and developers.</p>
          </div>
          <div class=" wow slideInDown col-md-4 icon-hover-hero">
            <span><i class="fa-solid fa-location-crosshairs map-icon py-4"></i></span>
            <h1 class="icon-text-20px mt-3">Best Location</h1>
            <p class="icon-text-15px">The venue is located not far from the local airport in the downtown and has a comfortable car parking.</p>
          </div>
          <div class=" wow slideInRight col-md-4 icon-hover-hero">
            <span><i class="fa-brands fa-java java-icon py-4"></i></span>
            <h1 class="icon-text-20px mt-3">Free Coffee Break</h1>
            <p class="icon-text-15px">Every visitor of our event has access to a free coffee break with lots of snacks and non-alcoholic drinks.</p>
          </div>
        </div>
      </div>
    </section>


    <section class="py-5 speaker-section">
      <div class="container">
        <div class=" wow fadeInDownBig row text-white text-center my-5">
          <div class="col">
            <h1 class="fw-bolder">Speakers</h1>
            <p>Our event gathers over 50 speakers. They include renowned graphic and UX designers, web developers, and programmers that revolutionized the world of IT. Here are some of them.</p>
          </div>
        </div>
        <div class=" wow fadeInUp row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 text-center text-danger mb-4 py-5">
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="card-img-top" alt="Kate Anderson">
              <div class="card-body">
                <h1 class="card-text-h1">Kate Anderson</h1>
                <p class="card-text-p">UX DESIGNER, WAVES DESIGN</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="card-img-top" alt="Max Peterson">
              <div class="card-body">
                <h1 class="card-text-h1">Max Peterson</h1>
                <p class="card-text-p">SENIOR DEVELOPER, TECHPRO</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{asset('website/images/team-classic-3-390x252.jpg') }}" class="card-img-top" alt="Helen Williams">
              <div class="card-body">
                <h1 class="card-text-h1">Helen Williams</h1>
                <p class="card-text-p">WEB DESIGNER, SPARK STUDIO</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{ asset('website/images/team-classic-4-390x252.jpg') }}" class="card-img-top" alt="Peter McMillan">
              <div class="card-body">
                <h1 class="card-text-h1 text-black">Peter McMillan</h1>
                <p class="card-text-p">PRODUCT MANAGER, ISTEP LTD.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{ asset('website/images/team-classic-5-390x252.jpg') }}" class="card-img-top" alt="Caroline Wilson">
              <div class="card-body">
                <h1 class="card-text-h1">Caroline Wilson</h1>
                <p class="card-text-p">USABILITY CONSULTANT, K-TECH</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card card-hover w-100">
              <img src="{{ asset('website/images/team-classic-6-390x252.jpg') }}" class="card-img-top" alt="John Clark">
              <div class="card-body">
                <h1 class="card-text-h1">John Clark</h1>
                <p class="card-text-p">PROGRAMMER, EZ APP</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="text-center bg-sponsors">
      <div class="container bg-light">
        <div class="wow fadeInDownBig row text-white text-center my-5">
          <div class="col">
            <h1 class="sponsors-text-1 m-5 fw-bolder" >Event Sponsors</h1>
            <p class="sponsors-text-2">Below you can read more about our event schedule, when and where our speakers’ conferences will take place and what they will talk about. Each event includes discussion with the attendees.</p>
          </div>
        </div>

        <div class="row p-5">
          <div class=" wow slideInLeft col-md-9">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                <div class="container">
                  <div class="row align-items-start">
                    <div class="col-4 jumbotron-images">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <p>Lorem ipsum dolor sit amet.</p>
                      <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quisquam.</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                <div class="container">
                  <div class="row align-items-start">
                    <div class="col-4 jumbotron-images">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <p>Lorem ipsum dolor sit amet.</p>
                      <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quisquam.</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab">
                <div class="container">
                  <div class="row align-items-start">
                    <div class="col-4 jumbotron-images">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <p>Lorem ipsum dolor sit amet.</p>
                      <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quisquam.</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
                <div class="container">
                  <div class="row align-items-start">
                    <div class="col-4 jumbotron-images">
                      <div class="row">
                      <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                          <img src="{{ asset('website/images/team-classic-2-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                        <div class="col-6">
                          <img src="{{ asset('website/images/team-classic-1-390x252.jpg') }}" class="img-fluid rounded-circle" alt="" srcset="">
                        </div>
                      </div>
                    </div>
                    <div class="col-8">
                      <p>Lorem ipsum dolor sit amet.</p>
                      <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quisquam.</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wow slideInRight col-md-3 bg-dark rounded-end">
            <div class="nav nav-tabs nav-tabs-vertical p-4 main-menu fw-bolder" id="nav-tab" role="tablist">
              <button class="nav-link active btn-dark" id="nav-first-tab" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true"><i class="fa-solid fa-arrow-right arrow-icon"></i>First Day</button>
              <button class="nav-link btn-dark" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false"><i class="fa-solid fa-arrow-right arrow-icon"></i>Second Day</button>
              <button class="nav-link btn-dark" id="nav-third-tab" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false"><i class="fa-solid fa-arrow-right arrow-icon"></i>Third Day</button>
              <button class="nav-link btn-dark" id="nav-fourth-tab" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false"><i class="fa-solid fa-arrow-right arrow-icon"></i>Fourth Day</button>
            </div>
            <div><button class="myButton m-5">Buy Tickets</button></div>
          </div>
        </div>
      </div>
    </section>
    <section class="sponsors-section section-lg bg-default text-center">
      <div class="container text-center">
        <h1 class="fw-bolder mb-5 pt-5">Event Sponsors</h1>
        <h5 class="text-uppercase text-warning mb-3 pb-4">Golden Sponsors</h5>
        <div class="row justify-content-center mb-5">
          <div class="wow slideInLeft col-6 col-md-3">
            <img src="{{ asset('website/images/logo-1-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInLeft col-6 col-md-3">
            <img src="{{ asset('website/images/logo-2-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInRight col-6 col-md-3">
            <img src="{{ asset('website/images/logo-3-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInRight col-6 col-md-3">
            <img src="{{ asset('website/images/logo-4-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
        </div>

        <h5 class="text-uppercase text-primary mb-3 pb-4">Main Sponsors</h5>
        <div class="row justify-content-center mb-5">
          <div class="wow slideInLeft col-6 col-md-3">
            <img src="{{ asset('website/images/logo-5-267x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInLeft col-6 col-md-3">
            <img src="{{ asset('website/images/logo-6-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInRight col-6 col-md-3">
            <img src="{{ asset('website/images/logo-7-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
          <div class="wow slideInRight col-6 col-md-3">
            <img src="{{ asset('website/images/logo-7-270x119.png') }}" alt="" class="img-fluid sponsor-logo">
          </div>
        </div>

        <button type="button" class="btn btn-outline-warning main-menu fw-bolder m-4">Become a Sponsor</button>
      </div>
    </section>
    <section class="gallery-section pt-5 bg-light ">
        <div class="container  text-center py-5 ">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
              <h1 class="fw-bolder">Event Highlights</h1>
              <p>Our event annually features lots of unforgettable moments that are an essential part of any conference taking place at Eventy. You can look at some of the best ones below in our Event Highlights gallery.</p>
            </div>
          </div>
        </div>

        <div class="container-fluid pb-5">
          <div class="wow bounceInUp row g-0 justify-content-around">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="gallery-item"><img src="{{ asset('website/images/gallery-home-2-1-480x339.jpg') }}" class="img-fluid" alt="Gallery Image 1">
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="gallery-item"><img src="{{ asset('website/images/gallery-masonry-10-480x339.jpg') }}" class="img-fluid" alt="Gallery Image 2">
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="gallery-item"><img src="{{ asset('website/images/gallery-masonry-7-480x339.jpg') }}" class="img-fluid" alt="Gallery Image 3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="buy-tickets-section py-5">
      <div class="container-fluid d-flex  justify-content-center text-center">
        <div class="row">
          <div class="col">
            <h1 class="text-white fw-bolder">Improve web design and development skills at Eventy!</h1>
            <button class="btn myButton w-25 mt-3 text-white">Buy Tickets</button>
          </div>
        </div>
      </div>
    </section>




    <section class="section section-lg bg-gray-1 section-cards">
      <div class="container py-lg-5">
        <div class="row row-50">
          <div class="col-12 text-center">
            <h1 class="title-decorate fw-bolder">Latest News</h1>
          </div>
          <div class="col-md-6 col-lg-4 wow-outer">
            <div class="wow fadeInUp">
              <div class="post-modern">
                <div class=""><a href=""><img src="{{ asset('website/images/post-modern-1-370x255.jpg') }}" alt="" width="370" height="255"/></a><a class="badge-primary badge my-3" href="#">Web Design</a></div>
                <div>
                  <p>May 11, 2026</p>
                  <h4><a class="text-black text-decoration-none" href="">Top 10 Web Design Trends You Should Know About</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow-outer">
            <div class="wow fadeInUp">
              <div class="post-modern">
                <div class=""><a href=""><img src="{{ asset('website/images/post-modern-2-370x255.jpg') }}" alt="" width="370" height="255"/></a><a class="badge-warning badge my-3" href="#">NEWS</a></div>
                <div>
                  <p>May 11, 2026</p>
                  <h4><a class="text-black text-decoration-none" href="">How to Register for the Nearest Event Conference</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow-outer">
            <div class="wow fadeInUp">
              <div class="post-modern">
                <div class=""><a href=""><img src="{{asset('website/images/post-modern-1-370x255.jpg')}}" alt="" width="370" height="255"/></a><a class="badge-secondary badge my-3" href="#">DEVELOPMENT</a></div>
                <div>
                  <p>May 11, 2026</p>
                  <h4 ><a class="text-black text-decoration-none" href="">10 Things to Consider When Developing a Mobile App</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-dark-subtle">
      <div class="google-map-container" >
        <h1 class="fw-bolder py-4 mb-5  text-success-emphasis  ">Google Map Location</h1>
        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.40811685051!2d90.40502173955198!3d23.775746814612056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7767d3aaaab%3A0xd3720a8e274190ec!2sBRAC%20Centre!5e0!3m2!1sen!2sbd!4v1719814610587!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <ul class="">
          <li data-location="BRAC Center" data-description="BRAC Center"></li>
        </ul>
      </div>
    </section>





@endsection
