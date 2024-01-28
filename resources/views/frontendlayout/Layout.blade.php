<!DOCTYPE html>
<html lang="en">

@php
    $globalData = app(\App\Services\DataService::class)->getGlobalData();
@endphp


<!-- Mirrored from themewagon.github.io/HighTechIT/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 09:48:23 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title> {{ $titre ?? ' ' }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Saira:wght@500;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('frontend/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="#"><i
                                class="fas fa-map-marker-alt me-2 text-secondary"></i></a>{{ $globalData['latestContact']['Address'] ?? 'Not Defined' }}
                    </small>
                    <small class="me-3 text-white-50"><a href="#"><i
                                class="fas fa-envelope me-2 text-secondary"></i></a>{{ $globalData['latestContact']['companyEmail'] ?? 'Not Defined' }}

                    </small>
                </div>
                <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your
                        Business</small></div>
                <div class="top-link">
                    <a href="{{ $globalData['latestContact']['LienFacebook'] ?? '' }} "
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                    <a href="{{ $globalData['latestContact']['LienTwitter'] ?? '' }}"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-twitter text-primary"></i></a>
                    <a href="{{ $globalData['latestContact']['LienIntagram'] ?? '' }}"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                            class="fab fa-instagram text-primary"></i></a>
                    <a href="{{ $globalData['latestContact']['LienLinkedin'] ?? '' }}"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i
                            class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="/" class="navbar-brand">
                    <img alt="Image placeholder" style="max-width: 50px;"
                        class="rounded-circle img-fluid" src="{{ asset('images/' . $globalData['latestContact']['Logo'] ?? 'No Image Defined') }} ">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        {{--  <a href="index.html" class="nav-item nav-link active text-secondary">Home</a> --}}
                        <div class="nav-item dropdown">
                            <a href="{{ route('aboutus') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">About</a>
                            <div class="dropdown-menu rounded">
                                {{--  <a href="{{ route('aboutus') }}" class="dropdown-item">About us</a> --}}
                                <a href="{{ route('policy') }}" class="dropdown-item">Policy</a>
                                <a href="{{ route('aboutus') }}" class="dropdown-item">Our History</a>
                                <a href="{{ route('ourmission') }}" class="dropdown-item">Mission</a>
                                <a href="{{ route('mandates') }}" class="dropdown-item">Mandates</a>
                                <a href="{{ route('ourgovernance') }}" class="dropdown-item">Our Governance</a>
                                <a href="{{ route('internationalrecognitions') }}" class="dropdown-item">International
                                    Recognitions</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quality
                            </a>
                            <div class="dropdown-menu rounded">
                                <a href="{{ route('qualitymanegmentsystem') }}" class="dropdown-item">Quality
                                    Management System
                                </a>
                                <a href="{{ route('bioriskmanegmentsystem') }}" class="dropdown-item">Biorisk
                                    Management Systems
                                </a>
                            </div>
                        </div>
                        {{-- <a href="service.html" class="nav-item nav-link">Facilities</a> --}}
                        <div class="nav-item dropdown">
                            <a href="{{ route('news') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">News</a>
                            <div class="dropdown-menu rounded">
                                <a href="{{ route('news') }}" class="dropdown-item">Events

                                </a>
                                <a href="{{ route('pressrelease') }}" class="dropdown-item">Press release
                                </a>
                                <a href="{{ route('facilitiesressources') }}" class="dropdown-item">Facilities and
                                    resources
                                </a>
                                <a href="{{ route('trainingandeducation') }}" class="dropdown-item">Training and
                                    Education Support
                                    programmes
                                </a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ route('service') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu rounded">
                                <a href="{{ route('qualitycontrolvaccine') }}" class="dropdown-item">Quality Control
                                    of Veterinary
                                    Vaccines
                                </a>
                                <a href="{{ route('productionsupply') }}" class="dropdown-item">Production and Supply
                                    of
                                    Diagnostics and Biologicals
                                </a>
                                <a href="{{ route('capacitybuildinng') }}" class="dropdown-item">Capacity
                                    Building</a>
                                <a href="{{ route('inprovementvaccineproduction') }}"
                                    class="dropdown-item">Improvement of vaccine
                                    production
                                </a>
                                <a href="{{ route('repositories') }}" class="dropdown-item">Repositories</a>
                                <a href="{{ route('supportsurveillance') }}" class="dropdown-item">Support
                                    Surveillance of animal
                                    Diseases
                                </a>
                                <a href="{{ route('onehealthsupport') }}" class="dropdown-item">ONE HEALTH
                                    Support</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Vaccines</a>
                            <div class="dropdown-menu rounded">
                                <a href="{{ route('passedvaccines') }}" class="dropdown-item">Passed Vaccines
                                </a>
                                <a href="{{ route('testprogressvaccine') }}" class="dropdown-item">QC tests in
                                    progress</a>
                                <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shirink-0">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        <a href="#" class="position-relative animated tada infinite">
                            <i class="fa fa-phone-alt text-white fa-2x"></i>
                            <div class="position-absolute" style="top: -7px; left: 20px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-column pe-4 border-end">
                        <span class="text-white-50">Have any questions?</span>
                        <span class="text-secondary">Call:
                            {{ $globalData['latestContact']['NumeroTelephone'] ?? 'Not Defined' }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ms-4 ">
                        <a href="{{ route('login') }}"><i class="bi bi-search text-white fa-2x"></i> </a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('frontcontent')

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block"><span class="text-secondary">AU-PANVAC</span> </h1>
                    </a>
                    <p class="mt-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere
                        delectus qui placeat inventore consectetur repellendus optio debitis.</p>
                    <div class="d-flex hightech-link">
                        <a href="{{ $globalData['latestContact']['LienFacebook'] ?? '' }}"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-facebook-f text-primary"></i></a>
                        <a href="{{ $globalData['latestContact']['LienTwitter'] ?? '' }}"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-twitter text-primary"></i></a>
                        <a href="{{ $globalData['latestContact']['LienIntagram'] ?? '' }}"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-instagram text-primary"></i></a>
                        <a href="{{ $globalData['latestContact']['LienLinkedin'] ?? '' }}"
                            class="btn-light nav-fill btn btn-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Short Link</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="/aboutus" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                        <a href="/contact" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                        <a href="/service" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                        <a href="/events" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Our News</a>
                        <a href="/events" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                        <a href="/contact" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="/contact" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text-secondary me-2"></i>
                            {{ $globalData['latestContact']['Address'] ?? 'Not Defined' }}</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-phone-alt text-secondary me-2"></i>
                            {{ $globalData['latestContact']['NumeroTelephone'] ?? 'Not Defined' }}</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-envelope text-secondary me-2"></i>
                            {{ $globalData['latestContact']['emailContact'] ?? 'Not Defined' }}</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i
                                class="fas fa-copyright text-secondary me-2"></i>
                            {{ $globalData['latestContact']['Empty1'] ?? 'Not Defined' }}</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light"><a href="" class="text-secondary"> </a> AU-PANVAC <a
                            href=""></a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>


<!-- Mirrored from themewagon.github.io/HighTechIT/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 09:49:05 GMT -->

</html>
