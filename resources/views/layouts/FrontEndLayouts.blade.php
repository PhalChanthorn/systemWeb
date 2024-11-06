<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'REACHBOTH GRAPHIC') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>
<body>
    @section('header')
    {{-- <div class="top_hea#ffd000white">
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-6">

                                <ul class="social-icon">
                                    <li>FOLLOW US</li>
                                    <li><i class="fab fa-facebook"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></i></li>
                                </ul>
                </div>
                <div class="col-6">
                    <p class="social-icon text-right">CONTACT US:096 5225 826</p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="nav-menu">
        <div class="bg-background">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-responsive" style="max-width:200px" src="{{ Vite::image('logo03.png') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="nav navbar-nav">
                        <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                          <a class="nav-link {{ request()->is('home*') ? 'active-menu' : '' }}" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                          <a class="nav-link {{ request()->is('service*') ? 'active-menu' : '' }}" href="/service">Service</a>
                        </li>
                        <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                          <a class="nav-link" href="#">Works</a>
                        </li>
                        <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                          <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                            <a class="nav-link" href="#">Client</a>
                          </li>
                          <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                            <a class="nav-link" href="#">Blog</a>
                          </li>
                          <li class="nav-item p-3" data-aos="fade-down" data-aos-duration="1000">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                      </ul>
                      </nav>
            </div>
          </div>
    </div>
    @show

    @yield('content')
{{-- <button class="btn btn-primary" data-aos="fade-right" id="btn">i LOVE YOU </button> --}}

    @section('footer')
    <div class="footer bg-background">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-8 offset-1">
                        <img class="logo-img img img-responsive w-100" src="{{ Vite::image('logo03.png') }}" alt="Logo">
                    </div>
                    <div class="col">
                        <h5 class="text-white">GIANTFOCUS Co., Ltd is one of Leading Digital Marketing Agency & Website Design Company in Cambodia.</h5>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-content-center align-items-center">
                    <div class="col  justify-content-center">
                        <ul class="list-icon d-flex justify-content-center">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-youtube"></i></li>
                          </ul>
                          <div class="col-12 pt-3">
                            <h1 class="let-talk text-center text-white">Lets Talk?</h1>
                        </div>
                        <div class="col d-flex align-content-center justify-content-center">
                            <button class="btn let-talk-btn px-3 mt-3 btnEnquiry">Make an enquiry!</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer p-3 bg-background">
        <div class="container">
            <div class="col text-center text-white">
                <h2 class="tel">
                    Cambodia
                </h2>
                <p class="text-tel">
                    +885 96 52 25 816
                </p>
                <p>2018 © Graphic Solution, All rights reserved.</p>
            </div>
        </div>
    </div>
    <div class="enquiry">
        <div class="container">
            <div class="row p-5">
                <div class="col-sm-8 offset-sm-2">
                    <div class="col-8">
                        <h1 class="let-talk">Lets Talk?</h1>
                        <p class="text-muted">Let’s make something awesome togheter</p>
                    </div>
                    <div class="closebtn">
                        <i class="far fa-times-circle"></i>
                    </div>
                  <form class="form-horizontal pt-5"  action="" method="POST">
                    <div class="form-group">
                        <div class="col">
                            <label class="label-enquiry">Your Name </label>
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col">
                            <label class="label-enquiry">Your Email </label>
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col">
                            <label class="label-enquiry">Subject </label>
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col">
                            <label class="label-enquiry">Budget </label>
                            <select class='form-control'>
                                <option>Select Budget</option>
                                <option>Low Budget</option>
                                <option>$1000-$2000</option>
                                <option>$1000-$2000</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col">
                            <label class="label-enquiry">YOUR MESSAGE  </label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                      </div
                      <div class="form-group form-control">
                          <div class="col-4">
                            <button type="submit" class="btn  btn-enq form-control">Send</button>

                          </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
    @show
</body>
</html>
