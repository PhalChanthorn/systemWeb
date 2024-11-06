@extends('layouts.FrontEndLayouts')
@section('header')
@parent
@endsection


@section('content')
<div class="home-content bg-background pt-5 mb-5">
    <div class="container h-100 position-relative ceo-img">
        <div class="row pt-5 position-relative mb-5">
            <div class="col-sm-6">
                <div class="col">
                    <h3 class="text-titleHome" data-aos="flip-up" data-aos-durations="3000">
                        <p>We Create Awesome</p>
                        <p>Business Solutions With</p>
                        <p>Techonogy Service</p>
                        <p>In Cambodai</p>
                    </h3>
                </div>
                <div class="col pt-3">
                    <button class="btn  btn-lg  bnt-viewproduct col-6" data-aos="fade-up" data-aos-durations="5000" data-aos-anchor-placement="bottom-bottom">Buy Now</button>
                </div>
            </div>
            <div class="col-sm-6"></div>

        </div>
        <div class="col product-content mt-5 pb-5">
            <div class="row">
                <div class="col-sm-4 mt-3" data-aos="flip-up" data-aos-durations="3000">
                    <div class="col active-product p-5">
                        <div class="row">
                            <div class="col-6 offset-3 p-3">
                                <img class="img-responsive w-100" src="{{ Vite::image('degitalIcon.png') }}" >
                            </div>
                            <div class="col-12">
                                <h4>BRANDING & CREATIVE</h4>
                                <p>Branding is more than a logo, design or slogan. It gets your target market to select you over the competition</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3" data-aos="flip-up" data-aos-durations="4000">
                    <div class="col  p-5">
                        <div class="row">
                            <div class="col-6 offset-3 p-3">
                                <img class="img-responsive w-100" src="{{Vite::image('degitalIcon.png') }}" >
                            </div>
                            <div class="col-12">
                                <h4>DIGITAL MARKETING</h4>
                                <p>You can reach an enormous audience via Social Media, Google Ads, SEO, Email & SMS Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-3" data-aos="flip-up" data-aos-durations="5000">
                    <div class="col  p-5">
                        <div class="row">
                            <div class="col-6 offset-3 p-3">
                                <img class="img-responsive w-100" src="{{Vite::image('designICon.png') }}" >
                            </div>
                            <div class="col-12">
                                <h4>WEBSITE DESIGN</h4>
                                <p>Web design is important because it impacts how your audience perceives your brand</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<div class="container bg-white">
        <div class="row pt-5 pb-5">
            <div class="col-sm-6" data-aos="fade-right" data-aos-durations="3000">
                <img class="img-responsive w-100" src="{{ Vite::image('slide.jpg')}}">
            </div>
            <div class="col-sm-6" data-aos="fade-left" data-aos-durations="3000">
                <h3>
                    Welcome to Technology Service in Cambodia
                </h3>
                <p class="pt-3 pb-4">
                   REACHBOTHGRAPHIC is one of Leading Technology Service Agency in Cambodia
                </p>
                <p class="text-muted">
                    We implement a range of digital marketing services to drive results for clients. We offer services in the areas of Branding/Creative, Website Design, Mobile APP Development, Video/Photography, Digital Marketing (Social Media, Google Ads & SEO), Digital PR/Influencer & CRM Software in Cambodia.
                </p>
            </div>
        </div>
        <hr>
        <div class="row bg-background p-5" data-aos="zoom-in" data-aos-durations="3000">
            <div class="col-sm-3 text-center">
                <div class="col" >
                    <h1 class="text-show1">3+</h1>
                </div>
                <div class="col">
                    <p class="text-show">YEAR IN BUSINESS</p>
                </div>
            </div>
            <div class="col-sm-3 text-center" data-aos="zoom-in" data-aos-durations="4000">
                <div class="col">
                    <h1 class="text-show1">30+</h1>
                </div>
                <div class="col">
                    <p class="text-show">TEAM MEMBER</p>
                </div>
            </div>
            <div class="col-sm-3 text-center" data-aos="zoom-in" data-aos-durations="5000">
                <div class="col">
                    <h1 class="text-show1">113+</h1>
                </div>
                <div class="col">
                    <p class="text-show">FINISH PROJECT</p>
                </div>
            </div>
            <div class="col-sm-3 text-center" data-aos="fade-up" data-aos-durations="6000">
                <div class="col">
                    <h1 class="text-show1">600+</h1>
                </div>
                <div class="col">
                    <p class="text-show">CLIENT</p>
                </div>
            </div>
        </div>
        <div class="row work-content pt-5 pb-5">
            <div class="col" data-aos="fade-up" data-aos-durations="3000">
                <h1 class="work-text">Work.</h1>
                <p class="work-subtext">THING WE ARE MADE</p>
            </div>
        </div>
</div>
<div class="work-img pb-5" data-aos="fade-up" data-aos-durations="3000">
    <div class="row">
    <div class="col-md-4 p-0 position-relative">
        <img class="img-responsive w-100" src="{{ Vite::image('6.png')}}">
        <div class="work-area">
            <div class="text-work-content">
                <h2>Product Design</h2>
                <p>Design / Marketing</p>
            </div>
        </div>
    </div>
    <div class="col-md-4  p-0 position-relative">

            <img class="img-responsive w-100" src="{{ Vite::image('14.png')}}">

            <div class="work-area">
                <div class="text-work-content">
                    <h2>Degital Maketing</h2>
                    <p>Facebook / Marketing</p>
                </div>

            </div>
    </div>
    <div class="col-md-4  p-0 position-relative">
        <img class="img-responsive w-100" src="{{ Vite::image('19.png')}}">
        <div class="work-area">
            <div class="text-work-content">
            <h2>Web Design</h2>
            <p>Web Design and Development
            </div>

        </div>
    </div>

</div>
</div>
@endsection

@section('footer')
    @parent
@endsection
