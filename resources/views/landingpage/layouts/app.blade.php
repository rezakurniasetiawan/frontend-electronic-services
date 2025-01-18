<!DOCTYPE html>
<html lang="en">

<head>
    @include('landingpage.partials.head')
</head>

<body class="index-page">
    @include('landingpage.partials.header')
    <main class="main">

       @yield('content')

      </main>

    <footer id="footer" class="footer light-background">

       @include('landingpage.partials.footer')
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landingpage/assets/js/main.js') }}"></script>

</body>

</html>
