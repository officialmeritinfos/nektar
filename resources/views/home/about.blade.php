@extends('home.base')
@section('content')

    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{$pageName}}</div>
                        <div class="page-title">
                            <h1>{{$pageName}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset('home/img/page-banner/page-banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/page-banner/page-banner.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- about__wrapper start -->
    <section class="about__wrapper section-padding  overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7 col-sm-6">
                    <div class="about_img">
                        <img src="{{asset('home/img/home-5/work_01.png')}}" class="img-fluid" alt>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="about_widget">
                        <img src="{{asset('home/img/home-5/about_01.png')}}" class="img-fluid d-none d-md-block" alt>
                        <div class="d-flex align-items-center years-experience years-experience_tow  overflow-hidden mt-20 mt-sm-10 mt-xs-10">
                            <div class="icons color-secondary">
                                <i class="icon-teamwork-1"></i>
                            </div>
                            <div class="number">
                                <span class="counter mb-3">13</span><sup>+</sup>
                                <h5 class="title">Years Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-5 col-md-12 ">
                    <div class="section-title section-title_2">
                        <h5><img src="{{asset('home/img/home-5/bage.svg')}}" alt> About Us</h5>
                        <h2 class="mb-20">We help you build a Greener Future <span>Together</span></h2>
                        <p>
                            At MySite, our journey began with a simple yet powerful vision: to empower individuals to invest in a sustainable future. Founded by a team passionate about environmental stewardship and financial innovation, we set out to create a platform where investment opportunities align with our planet's well-being.
                        </p>
                        <p>
                            Driven by our commitment to sustainability, we curated a portfolio of green energy projects that not only promise financial returns but also contribute to mitigating climate change. Our platform connects investors with renewable energy initiatives, from solar farms to wind turbines, offering a pathway to profitable and purposeful investing.
                        </p>
                    </div>
                    <div class="about_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="icons">
                                        <i class="icon-teamwork-1"></i>
                                    </div>
                                    <h5>Sustainable Energy</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="icons">
                                        <i class="icon-teamwork-1"></i>
                                    </div>
                                    <h5>Transparency and Accountability</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        At MySite, our core focus areas serve as the guiding principles that underpin everything we do. From investing in sustainable energy projects to engaging with local communities, promoting innovation, and upholding transparency, each aspect of our business reflects our commitment to creating positive change for our planet and society.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about__wrapper end -->

@endsection
