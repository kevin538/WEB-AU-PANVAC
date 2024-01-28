@extends('frontendlayout.Layout')
@section('frontcontent')
@php
$globalData = app(\App\Services\DataService::class)->getGlobalData();
@endphp
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('sliders/' . $globalData['latestContact']['ImageCarousel'] ?? 'No Image Defined') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $titre ?? ' ' }}</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our News and Events</h5>
                <h1>Latest Events & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($news as $album)
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{ asset('news/' . $album->Picture) }}" class="img-fluid w-100 rounded-top"
                            alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">{{ $album->Title }} </span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="/contact" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="{{ $globalData['latestContact']['LienFacebook'] ?? '' }}"
                                        class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="{{ $globalData['latestContact']['LienTwitter'] ?? '' }}"
                                        class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="{{ $globalData['latestContact']['LienIntagram'] ?? '' }}"
                                        class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="{{ asset('frontend/img/admin.jpg') }}"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Au-Panvac</h5>
                            <span class="text-secondary">{{ \Carbon\Carbon::parse($album->DOT)->format('j F Y') }}
                            </span>
                            <p class="py-2">{{ $album->DescriptionEn }}</p>
                        </div>
                        <div
                            class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="#" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="#" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
