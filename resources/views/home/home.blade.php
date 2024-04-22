@extends('home.base')
@section('content')

    <!-- banner slider start -->
    <section class="banner-slider__wrapper banner-slider__wrapper_2 overflow-hidden">
        <div class="slider-controls slider-controls-2">
            <div class="banner-slider-arrows d-flex flex-column"></div>
        </div>

        <div class="banner-slider_2">
            <div class="slider-item" style="background-image: url({{asset('home/img/renewable.webp')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark" data-animation="fadeInUp" data-delay="0.5s">
                                    Making Tomorrow Greener
                                </h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40 text-success" data-animation="fadeInUp" data-delay="1s">
                                    Make Tomorrow <br> <span>Greener</span>
                                </h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark">
                                    Invest in renewable energy with confidence, knowing that your contributions are driving
                                    positive change towards a more sustainable future.
                                    Together, we can make a difference by supporting innovative projects that promote
                                    environmental stewardship and economic prosperity.
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{url('services')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp" data-delay="1.3s">Our Services <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}" alt="">
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{asset('home/img/greenwind.webp')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content_2">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark" data-animation="fadeInUp" data-delay="0.5s">
                                    Reward for Green
                                </h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40 text-success" data-animation="fadeInUp" data-delay="1s">
                                    Invest in Green, <br> <span>Reap the Reward</span>
                                </h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark">
                                    Make your money work for the planet. {{$siteName}} offers opportunities to invest in renewable
                                    energy and enjoy financial growth. Start investing sustainably today.
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{url('services')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp" data-delay="1.3s">Our Services <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}" alt="">
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{asset('home/img/wind-house.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content_2">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark" data-animation="fadeInUp" data-delay="0.5s">Green means growth</h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40 text-success" data-animation="fadeInUp" data-delay="1s">When Green <br> <span>Meets Growth</span></h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark">
                                    Grow your wealth while supporting renewable energy initiatives.
                                    {{$siteName}} offers a platform to invest in green projects, fostering a sustainable future for generations to come.
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{url('services')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp" data-delay="1.3s">Our Services <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner slider end -->

    <!-- competitive-edge start -->
    <section class="competitive-edge competitive-edge_2 overflow-hidden">
        <div class="container">
            <div class="fauture__element bg-center bg-cover " style="background-image: url({{asset('home/img/home-5/banner_03.png')}});">
                <div class="row">
                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon"><i class="fal fa-analytics"></i></div>
                                <h4>01</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>Clean Energy Trading</h4>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon">
                                    <i class="icon-like-comment"></i>
                                </div>
                                <h4>02</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>Eco-Friendly</h4>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon">
                                    <i class="icon-teamwork-1"></i>
                                </div>
                                <h4>03</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>100% Renewable</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="staff__widget mt-30">
                            <span> Our nearly 100+ staff are ready to help you? <i class="fas fa-paper-plane"></i> <a href="{{route('register')}}">Get a Started Now</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- competitive-edge end -->

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
                            At {{$siteName}}, our journey began with a simple yet powerful vision: to empower individuals to invest in a sustainable future. Founded by a team passionate about environmental stewardship and financial innovation, we set out to create a platform where investment opportunities align with our planet's well-being.
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
                        At {{$siteName}}, our core focus areas serve as the guiding principles that underpin everything we do. From investing in sustainable energy projects to engaging with local communities, promoting innovation, and upholding transparency, each aspect of our business reflects our commitment to creating positive change for our planet and society.
                    </p>
                    <a href="{{url('about')}}" class="theme-btn btn__2">Read More <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- about__wrapper end -->

    <!-- employee-friendly start -->
    <section class="employee__wrapper employee__wrapper_2 overflow-hidden">
        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our </span>Services</h1>
                    <p class="mb-5">At {{$siteName}}, we offer a comprehensive range of services aimed at empowering businesses and individuals to transition to renewable energy solutions seamlessly. Our services are tailored to meet the diverse needs of our clients and support them at every stage of their renewable energy journey.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('home/img/blog-1.jpg')}}" alt="">
                            <a href="" class="h5 lh-base d-inline-block">Renewable Energy Investment</a>
                            <p class="mb-4">Our investment services offer opportunities for individuals and businesses to invest in renewable energy projects, diversifying their investment portfolios while supporting sustainable initiatives.</p>
                            <a href="{{url('services')}}" class="btn btn-outline-primary px-3">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('home/img/blog-2.jpg')}}" alt="">
                            <a href="" class="h5 lh-base d-inline-block">Energy Trading Platform</a>

                            <p class="mb-4">Our energy trading platform facilitates transparent and efficient trading of renewable energy certificates (RECs), enabling clean energy producers to sell their excess energy and businesses to purchase renewable energy credits to offset their carbon footprint.</p>
                            <a href="{{url('services')}}" class="btn btn-outline-primary px-3">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('home/img/blog-3.jpg')}}" alt="">
                            <a href="" class="h5 lh-base d-inline-block">Environmental Impact Assessment</a>

                            <p class="mb-4">Before embarking on a renewable energy project, it's essential to assess its potential environmental impact. </p>
                            <a href="{{url('services')}}" class="btn btn-outline-primary px-3">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('home/img/blog-4.jpg')}}" alt="">
                            <a href="" class="h5 lh-base d-inline-block">Energy Consulting</a>

                            <p class="mb-4">Our energy consulting services provide businesses and organizations with expert guidance on renewable energy adoption, helping them optimize their energy use, reduce costs, and navigate the complexities of the renewable energy landscape.</p>
                            <a href="{{url('services')}}" class="btn btn-outline-primary px-3">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="blog-item border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{asset('home/img/blog-5.jpg')}}" alt="">
                            <a href="" class="h5 lh-base d-inline-block">Educational Resources</a>

                            <p class="mb-4">In addition to our core services, we provide educational resources and training programs to raise awareness and promote understanding of renewable energy technologies and practices. </p>
                            <a href="{{url('services')}}" class="btn btn-outline-primary px-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- employee-friendly end -->
    <section class="working_wrapper section-padding overflow-hidden">
        <!-- Feature Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="text-primary mb-3"><span class="fw-light text-dark">PATHFINDING </span> PRINCIPLES</h3>
                    <p class="mb-5">When you choose us, you're not just selecting a service provider; you're partnering with a trailblazer in the digital investment landscape.</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Innovative Trading Solutions</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Pioneering trading solutions for confident investing.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Expert Trading Guidance</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Experienced traders providing insightful advice tailored to your goals.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Cutting-Edge Technology</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Utilizing advanced tech for seamless trading experiences.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <img style="scale: 1;" class="img-fluid animated pulse infinite" src="{{asset('home/img/windmill.png')}}">
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Tailored Strategies</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Customized approaches to match your unique investment needs.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Transparency and Security</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Ensuring transparent, secure trading environments.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Proven Success</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Demonstrated track record of successful trades and satisfied clients.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <!-- Feature End -->
    </section>


    <!-- why-choose start -->
    <section class="why-choose why-choose__home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose__content why-choose__content-home">
                        <div class="why-choose__text">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15">
                            <img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Why choose us</span>
                            <h2 class="title color-pd_black">Developing Solutions For The Future</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose__content why-choose__content-home mt-md-25 mt-sm-20 mt-xs-20">
                        <div class="description font-la">
                            <p>Though there may be others that want to be like us, but they are never us, and that is because we always stand out.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="why-choose__item-wrapper why-choose__item-two-wrapper d-grid justify-content-between mt-60 mt-md-50 mt-sm-40 mt-xs-30">
                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-consultation"></i>
                            </div>

                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Comprehensive Expertise</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    {{$siteName}} stands out as your premier choice due to our comprehensive expertise across a diverse range of investment sectors. From real estate and gold to cutting-edge AI-driven stock analysis, our team's deep knowledge ensures that you have a trusted partner in every facet of your financial journey.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-lawyer"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Innovative AI Solutions</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    Harness the power of innovation with {{$siteName}}'s AI-driven investment strategies. Our state-of-the-art technologies analyze market trends, providing you with real-time insights and a competitive edge in the dynamic world of investments.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-financial"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Client-Centric Approach</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    At {{$siteName}}, your success is our priority. Our client-centric approach ensures personalized solutions tailored to your unique financial goals. Your journey to financial prosperity is our shared commitment, and we are dedicated to delivering exceptional service at every step.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Ethical and Transparent Practices</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10"><p>
                                    Transparency and ethics are the cornerstones of our operations. {{$siteName}} upholds the highest standards of integrity, ensuring that you can trust every aspect of your investment journey. Experience the peace of mind that comes with ethical and transparent financial practices.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div><h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Sustainable Investing</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    {{$siteName}} goes beyond profits, championing sustainability in every investment. Join us in contributing to a greener future with our dedication to sustainable agriculture, ethical gold mining, and environmentally conscious practices across our portfolio.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Educational Empowerment</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    Elevate your financial literacy with {{$siteName}}. We believe in empowering our clients through educational resources, helping you make informed decisions. Navigate the complexities of the financial world with confidence, guided by our commitment to your financial education.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose end -->

    <!-- get-free end -->
    <section class="get-free get-free-home overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-free__content-wrapper overflow-hidden" style="background-image: url({{asset('home/img/services/get-free-bg.png')}});">
                        <div class="get-free__content d-flex align-items-center justify-content-between">
                            <div class="get-free__content-text">
                                <h2 class="title mb-10 mb-xs-5 color-white">Get Started Today!</h2>

                                <div class="description color-white font-la fw-500">
                                    Join the perfect opportunity to start earning.
                                </div>
                            </div>

                            <div class="get-free__content-form">
                                <a href="{{route('register')}}" type="submit" class="theme-btn btn-sm">Get Started <i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get-free end -->

    <!-- work-process end -->
    <section class="work-process work-process-home bg-dark_red pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Our Work Process</span>
                        <h2 class="title color-pd_black">How Our Services Work</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30 last_no_bullet">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-research"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 1</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Create an Account</h6>

                            <div class="description font-la">
                                <p>Create a secured account, and login</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-worker-1"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 2</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Select Package and Deposit</h6>

                            <div class="description font-la">
                                <p>You can speak with a representative first to guide you on the best opportunity to invest in.
                                    When you have selected your package, deposit.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-outline"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 3</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Investment Cycle</h6>

                            <div class="description font-la">
                                <p>We take great care with all investments to ensure that the maximum return is received. Upon confirmation
                                    of your deposit, our program kicks in and handles the rest</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-target-2"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 4</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Withdraw</h6>

                            <div class="description font-la">
                                <p>At the end of the investment cycle, you can withdraw your earnings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-process end -->

    <!-- counter-area start -->
    <div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-process-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">47</span>k+</div>
                            <div class="description font-la">Active Users</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-support-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">121</span>M+</div>
                            <div class="description font-la">Deposit</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-coffee-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">96</span>M+</div>
                            <div class="description font-la">Withdrawals</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-teamwork-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">10</span>+</div>
                            <div class="description font-la">Years of Operation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area end -->

    <!-- testimonial start -->

    <section class="testimonial bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Testimonials</h6>
                        <h2 class="title color-d_black">{{$siteName}} <span>Clients Feedback</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Jason+H.&rounded=true" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Jason H</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"{{$siteName}} has been a game-changer for my investments. The combination of AI precision and a diverse portfolio has not only safeguarded my wealth but propelled it to new heights. Trustworthy, innovative, and truly a partner in financial success."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Frederick+K.&rounded=true" class="img-fluid" alt="">
                                        </div>
                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Frederick K</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"As someone new to investing, {{$siteName}} provided the guidance I needed. The team's dedication to educating
                                        clients sets them apart. From understanding Forex to exploring green investments, they made the
                                        complex seem simple. Grateful for their expertise!"</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Ashley+J.&rounded=true" class="img-fluid" alt="">
                                        </div>
                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Ashley J</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"I never thought investing could be this personalized and rewarding. {{$siteName}}'s tailored strategies aligned perfectly with my retirement goals. Their commitment to staying ahead of market trends is evident, making them my go-to choice for securing my financial future."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->


    <!-- blog-news start -->
    <section class="blog-news pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="blog-news__content text-center">
                        <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Blog & News</span>
                        <h2 class="title color-d_black">{{$siteName}} Latest Blog & News</h2>
                    </div>
                </div>
            </div>

            <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
                <div class="row mb-minus-30">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="blog-item blog-item-three mb-30">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- blog-news end -->


@endsection
