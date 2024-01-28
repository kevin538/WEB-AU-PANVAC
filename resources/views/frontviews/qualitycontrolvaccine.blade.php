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


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        {{-- <h5 class="text-primary">Policy</h5> --}}
                        <h1 class="mb-4">{{ $soustitre ?? ' ' }}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.
                            Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo
                            cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque
                            quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo
                            nec erat vestibulum, et malesuada augue laoreet.</p>
                        <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit
                            amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin
                            scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                        {{-- <a href="#" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">{{ $soustitre ?? ' ' }}</h5>
                    <h1 class="mb-4">Description</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.
                        Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus,
                        ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec
                        elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat
                        vestibulum, et malesuada augue laoreet.</p>
                    <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet
                        leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque
                        quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                        <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet
                            leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque
                            quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                  {{--   <a href="#" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
