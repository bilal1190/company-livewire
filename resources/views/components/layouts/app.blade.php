<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'LiverWire-WebApp' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/fontawesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/solid.css') }}">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
</head>

<body>

    <!-- navigation -->
    <header class="navigation bg-tertiary">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
                <a class="navbar-brand" wire:navigate href="{{ route('home') }}">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="160"
                        src="{{ asset('frontend/images/logo1.png') }}" alt="Wallet">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('page', 1) }}">About
                                Us</a></li>
                        <li class="nav-item "> <a wire:navigate class="nav-link"
                                href="{{ route('servicesPage') }}">Services</a></li>
                        <li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('teamPage') }}">Our
                                Team</a></li>
                        <li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('faqs') }}">FAQ</a>
                        </li>
                    </ul>
                    <a wire:navigate href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- /navigation -->

    {{ $slot }}


    <footer class="section-sm bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Service</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="service-details.html">Digital Marketing</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Web Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Logo Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Graphic Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a wire:navigate href="{{ route('page', 1) }}">About Us</a>
                            </li>
                            <li class="mb-2"><a href="{{ route('page', 1) }}">Contact Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Blog</a>
                            </li>
                            <li class="mb-2"><a href="#!">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                        <ul class="list-unstyled">
                            <li class="list-inline-item me-4">
                                <a class="text-black" wire:navigate href="{{ route('page', 2) }}">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item me-4"><a class="text-black" wire:navigate
                                    href="{{ route('page', 3) }}">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                        <ul class="list-unstyled">
                            <li class="list-inline-item me-4"><a class="text-black"
                                    href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <div class="footer-bar bg-dark text-white text-center py-3">
        <p class="mb-0"> Copyright 2025 HFM Solutions❤. All Rights Reserved.</p>
    </div>
    <!-- # JS Plugins -->
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Main Script -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.counter').counterUp({
    delay: 10,
    time: 1000
});
    </script>
    @livewireScripts
</body>

</html>
