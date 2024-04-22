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

@endsection
