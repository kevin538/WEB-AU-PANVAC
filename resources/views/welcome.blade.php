@extends('frontendlayout.Layout')
@section('frontcontent')
    @php
        $globalData = app(\App\Services\DataService::class)->getGlobalData();
    @endphp
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($albums as $key => $album)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('sliders/' . $album->Image) }} " class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp"> {{ $album->TitreEn }}</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight"> {{ $album->SloganEn }}</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">{{ $album->DescriptionEn }}.</p>
                                <a href="#" class="me-2"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read
                                        More</button></a>
                                <a href="/contact" class="ms-2"><button type="button"
                                        class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact
                                        Us</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">
                            {{ $globalData['latestContact']['NombreService'] ?? '' }}</h1>
                        <h5 class="text-white mt-1">Success in getting Happy Customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">{{ $globalData['latestContact']['NombreTeams'] ?? '' }}
                        </h1>
                        <h5 class="text-white mt-1">Thousands of Teams Members</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">
                            {{ $globalData['latestContact']['NombreCertifiedcertificate'] ?? '' }}</h1>
                        <h5 class="text-white mt-1">Certified Certificate</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">
                            {{ $globalData['latestContact']['Nombretestinprogrss'] ?? '' }}</h1>
                        <h5 class="text-white mt-1">Test In Progress </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('frontend/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('frontend/img/about-2.jpg') }}" class="img-fluid w-100 rounded"
                                alt="">
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


    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                @php $toggle = true; @endphp
                @foreach ($service as $team)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    @if ($toggle)
                                        <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                    @else
                                        <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                    @endif

                                    @php $toggle = !$toggle; @endphp
                                    <h4 class="mb-3">{{ $team->TitreEn }}</h4>
                                    <p class="mb-4">{{ $team->DescriptionEn }}</p>
                                    <a href="/service" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Project Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Project</h5>
                <h1>Our Recently Completed Projects</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            {{--  <img src="{{ asset('frontend/img/project-1.jpg') }}" class="img-fluid w-100 rounded"
                                alt=""> --}}
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                            {{-- <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                            {{-- <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Mobile Info</h4>
                                    <p class="m-0 text-white">Upcomming Phone</p>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                          {{--   <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web Development</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                            {{-- <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Digital Marketing</h4>
                                    <p class="m-0 text-white">Marketing Analysis</p>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <video class="img-fluid w-100 rounded" style="height: 220px" controls>
                                <source src="{{ asset('chemin/vers/ta/video.mp4') }}" type="video/mp4">
                                <!-- Ajoute d'autres sources pour une compatibilité cross-browser -->
                                Your browser does not support the video tag.
                            </video>
                            {{-- <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
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
                                <img alt="Image placeholder" style="max-width: 70px;"
                                    class="rounded-circle img-fluid border border-4 border-white mb-3"
                                    src="{{ asset('images/' . $globalData['latestContact']['Logo'] ?? 'No Image Defined') }} ">
                                {{-- <img src="{{ asset('frontend/img/admin.jpg') }}"
                                    class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h5 class="">By AU-PANVAC</h5>
                                <span class="text-secondary">{{ \Carbon\Carbon::parse($album->DOT)->format('j F Y') }}
                                </span>
                                <p class="py-2">{{ $album->DescriptionEn }}</p>
                            </div>
                            <div
                                class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="/contact" class="text-white"><small><i
                                            class="fas fa-share me-2 text-secondary"></i>Contact us</small></a>
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


    <!-- Team Start -->
    <div class="container-fluid py-5 mb-5 team">
        <div class="container">
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
                                    <img src="{{ asset('teams/' . $team->Picture) }}"
                                        class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class=""> {{ $team->Name }}</h4>
                                    <p class="m-0"> {{ $team->DesignationEn }}</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                                        href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                                        href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                                        href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                                        href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('frontend/img/testimonial-1.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('frontend/img/testimonial-3.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('frontend/img/testimonial-4.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
                <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with
                    Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                        href=""></a></p>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Address</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank"
                                    class="h5">{{ $globalData['latestContact']['Address'] ?? 'Not Defined' }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a class="h5" href="tel:+0123456789"
                                    target="_blank">{{ $globalData['latestContact']['NumeroTelephone'] ?? 'Not Defined' }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a class="h5" href="mailto:info@example.com"
                                    target="_blank">{{ $globalData['latestContact']['companyEmail'] ?? 'Not Defined' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.377637618018!2d39.20603421405851!3d9.145000993820805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1636f590a71f619f%3A0x429ea66cdd3bc8!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="p-5 rounded contact-form">
                            <form action="{{ route('send.email') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" required class="form-control border-0 py-3" name="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" required class="form-control border-0 py-3" name="email"
                                        placeholder="Your Email">
                                </div>
                                <div class="mb-4" style="visibility: hidden">
                                    <input type="email" class="form-control border-0 py-3" name="project"
                                        value="{{ $globalData['latestContact']['companyEmail'] ?? 'Not Defined' }}"
                                        placeholder="Project">
                                </div>
                                <div class="mb-4">
                                    <textarea required class="w-100 form-control border-0 py-3" name="message" rows="6" cols="10"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="submit">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
