@extends('layouts.app')

@section('content')

    <section class="sufia-slider pt_30 pb_30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pb_20">Slide 1</h2>
                    <div class="slider-main">
                        <!-- Slider Item -->
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide2.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="pt_30 pb_30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pb_20">Refferals 1</h2>
                </div>
            </div>
            <div class="row">
                @for($i = 0; $i < 15; $i++)
                    <div class="col-md-3 col-xs-6 mb_50">
                        <div class="service" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'>
                            <h4 class="mtb_20">Safe And Secure</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-info">Read more</button>
                                <button class="btn btn-info">Referral link</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="sufia-slider-circle pt_30 pb_30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pb_20">Slide Circle 1</h2>
                    <div class="slider-circle">
                        <!-- Slider Item -->
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide2.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sufia-slider pt_30 pb_30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pb_20">Slide 2</h2>
                    <div class="slider-main">
                        <!-- Slider Item -->
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide1.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide2.jpg')}}")'></div>
                        <div class="single-slider" style='background-image:url("{{asset('site/img/our/slide3.jpg')}}")'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
