@extends('frontendlayout.Layout')
@section('frontcontent')
@php
        $globalData = app(\App\Services\DataService::class)->getGlobalData();
    @endphp
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('sliders/' . $globalData['latestContact']['ImageCarousel'] ?? 'No Image Defined') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $titre ?? ' ' }}</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav> --}}
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
                        <img src="{{ asset('frontend/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('frontend/img/about-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">About AU-Panvac</h1>
                    @php
                        // Diviser le texte en deux parties
                        $textParts = str_split($latestContact->AboutUsEn, strlen($latestContact->AboutUsEn) / 2);

                        $text = $latestContact->AboutUsEn;
                        // Number from you have to divide the text
                        $wordsPerParagraph = 60;
                        // count the number of
                        $wordCount = str_word_count($latestContact->AboutUsEn);
                        // Diviser le texte en paragraphes
                        $paragraphs = [];
                        // Si le texte a plus de mots que la limite, diviser en paragraphes
                        if ($wordCount > $wordsPerParagraph) {
                            $words = explode(' ', $text);
                            $currentParagraph = '';

                            foreach ($words as $word) {
                                $currentParagraph .= $word . ' ';

                                if (str_word_count($currentParagraph) >= $wordsPerParagraph) {
                                    $paragraphs[] = trim($currentParagraph);
                                    $currentParagraph = '';
                                }
                            }

                            // Ajouter le dernier paragraphe si nécessaire
                            if (!empty($currentParagraph)) {
                                $paragraphs[] = trim($currentParagraph);
                            }
                        } else {
                            // Si le texte a moins de mots que la limite, ajouter le texte tel quel
                            $paragraphs[] = $text;
                        }
                    @endphp
                    <p class="mb-4">
                        @foreach ($paragraphs as $paragraph)
                            {{ $paragraph }}<br><br>
                        @endforeach
                    </p>

                    {{--  <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p> --}}
                    <a href="/contact" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid pb-5 mb-5 team">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                @foreach ($teams as $team)
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{ asset('teams/' . $team->Picture) }}" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">{{ $team->Name }}</h4>
                                <p class="m-0">{{ $team->DesignationEn }}</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="{{ $globalData['latestContact']['LienFacebook'] ?? ''}} "><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="{{ $globalData['latestContact']['LienTwitter'] ?? ''}}"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="{{ $globalData['latestContact']['LienIntagram'] ?? ''}}"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href="{{ $globalData['latestContact']['LienLinkedin'] ?? ''}}"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
