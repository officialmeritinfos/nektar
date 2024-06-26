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


    <!-- End Service Details Area -->
    <section class="service-details-area ptb-100 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-wrap">
                        <div class="service-img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="Image">
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->

    <!-- pricing start -->
    <section class="pricing pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden" style="background-image: url({{asset('home/img/price/testimonial-bg.svg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-40 mb-xs-30 text-center">
                        <h2 class="title color-d_black mb-25 mb-sm-20 mb-xs-15 text-capitalize">Our Investment Packages</h2>

                    </div>
                </div>
            </div>

            <div class="pricing-item-wraper">
                <div class="row mb-minus-30 justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden">
                                <div class="pricing__card-header">
                                    <h3 class="title color-d_black">{{$package->name}}</h3>
                                    <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">
                                        {{$package->roi}}%
                                        <span>/{{$option->getReturnType($package->returnType)}}</span></div>
                                </div>
                                <div class="pricing__card-body">
                                    <ul>
                                        <li><i class="fal fa-check-square"></i>
                                            Min Deposit: ${{number_format($package->minAmount,2)}}
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Max Deposit:  @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Daily Profit: {{$package->roi}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Weekly Profit: {{$package->roi*7}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Monthly Profit: {{$package->roi*28}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>  Duration: {{$package->Duration}}</li>
                                        <li><i class="fal fa-check-square"></i> Referral Bonus: {{$package->referral}}%</li>
                                    </ul>
                                    <a href="{{route('register')}}" class="theme-btn mt-40 mt-md-35">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div><!-- /pricing__card -->
                    @endforeach
                    <div class="pricing__content mb-3 mb-xs-30 text-center">
                        <h4 class="title color-d_black mb-25 mb-sm-20 mb-xs-15 text-capitalize">VIP Packages</h4>

                    </div>
                    @foreach($vipPackages as $pack)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden">
                                <div class="pricing__card-header">
                                    <h3 class="title color-d_black">{{$pack->name}}</h3>
                                    <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">
                                        {{$pack->roi}}%
                                        <span>/{{$option->getReturnType($pack->returnType)}}</span></div>
                                </div>
                                <div class="pricing__card-body">
                                    <ul>
                                        <li><i class="fal fa-check-square"></i>
                                            Min Deposit: ${{number_format($pack->minAmount,2)}}
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Max Deposit:  @if($pack->isUnlimited !=1)
                                                ${{number_format($pack->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Daily Profit: {{$pack->roi}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Weekly Profit: {{$pack->roi*7}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Monthly Profit: {{$pack->roi*28}}%
                                        </li>
                                        <li><i class="fal fa-check-square"></i>  Duration: {{$pack->Duration}}</li>
                                        <li><i class="fal fa-check-square"></i> Referral Bonus: {{$pack->referral}}%</li>
                                    </ul>
                                    <a href="{{route('register')}}" class="theme-btn mt-40 mt-md-35">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div><!-- /pricing__card -->
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- pricing end -->

@endsection
